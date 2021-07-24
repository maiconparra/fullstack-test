<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

        $obj = new stdClass();
        $obj->veiculo = $request->veiculo;
        $obj->marca = $request->marca;
        $obj->ano = intval($request->ano);
        $obj->descricao = $request->descricao;
        $obj->vendido = $request->vendido;

        echo '<pre>';
        print_r((array) $obj);

        Http::post('http://localhost:3333/carsPost', (array) $obj);
        return redirect('/cars/cars');
    }
}
