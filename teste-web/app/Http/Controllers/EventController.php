<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\Throw_;
use stdClass;

class EventController extends Controller
{
    //
    public function index()
    {
        $cars = Http::post('http://localhost:3333/carsFind', ["veiculo" => null, "marca" => null]);

        return view('home', ["cars" => json_decode($cars)]);
    }

    public function listCars() {

        $cars = Http::post('http://localhost:3333/carsFind', ["veiculo" => null, "marca" => null]);

        return view('cars.cars', ['cars' => json_decode($cars)]);
    }

    public function createCars() {
        return view('/cadastro');
    }

    public function store(Request $request) {

            $obj = new stdClass();
            $obj->veiculo = $request->veiculo;
            $obj->marca = $request->marca;
            $obj->ano = intval($request->ano);
            $obj->descricao = $request->descricao;
            $obj->vendido = $request->vendido;

            //Image upload
            if($request->hasFile('file') && $request->file('file')->isValid()) {

                $requestFile = $request->file;

                $extension = $requestFile->extension();

                $imageName = md5($requestFile->getClientOriginalName() . strtotime("now")) . "." . $extension;

                $requestFile->move(public_path('img/carsImages'), $imageName);

                $obj->file = $imageName;

            }

            if(empty($obj->veiculo) || empty($obj->marca) || empty($obj->ano) || empty($obj->descricao)) {
                return redirect('/form-veiculo')->with('msg', 'Á campos obrigatórios não preenchidos!!');
            }

            Http::post('http://localhost:3333/carsPost', (array) $obj);
            return redirect('/cars/cars')->with('msg', 'Veiculo cadastrado com sucesso!!');
    }

    public function find(Request $request) {

        $obj = new stdClass();
        $obj->veiculo = $request->veiculo;
        $obj->marca = $request->marca;

        if(empty($obj->veiculo) && empty($obj->marca)) {
            $obj->veiculo = null;
            $obj->marca = null;
        }else if(empty($obj->veiculo) && !empty($obj->marca)) {
            $obj->veiculo = null;
        }else if(!empty($obj->veiculo) && empty($obj->marca)){
            $obj->marca = null;
        }

        $cars = Http::post('http://localhost:3333/carsFind', (array) $obj);

        if(empty(json_decode($cars))) {
            return redirect('/')->with('msg', 'Veiculo não encontrado!!');
        }

        echo '<pre>';
        print_r(json_decode($cars));
        //exit();

        return redirect('/')->with('cars', json_decode($cars));
    }
}
