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
        $cars = Http::post('http://localhost:3333/carsFind', ["veiculo" => "", "marca" => ""]);

        return view('home', ["cars" => json_decode($cars)]);
    }

    public function listCars() {

        $cars = Http::post('http://localhost:3333/carsFind', ["veiculo" => "", "marca" => ""]);

        return view('cars.cars', ['cars' => json_decode($cars)]);
    }

    public function createCars() {
        return view('/cadastro');
    }

    public function store(Request $request) {

        try {

            $obj = new stdClass();
            $obj->veiculo = $request->veiculo;
            $obj->marca = $request->marca;
            $obj->ano = intval($request->ano);
            $obj->descricao = $request->descricao;
            $obj->vendido = $request->vendido;

            if(empty($obj->veiculo) || empty($obj->marca) || empty($obj->ano) || empty($obj->descricao) || empty($obj->vendido)) {
                throw new Exception('Á campos obrigatórios não preenchidos!!');
            }

            Http::post('http://localhost:3333/carsPost', (array) $obj);
            return redirect('/cars/cars');
        }catch (Exception $e) {

        }
    }
}
