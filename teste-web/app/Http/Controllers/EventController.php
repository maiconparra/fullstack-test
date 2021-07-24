<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\Cars;


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
        return view('/cadastrar');
    }
}
