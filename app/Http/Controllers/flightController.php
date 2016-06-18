<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\flight;
class flightController extends Controller
{
    public function index(){
      $flights = Flight::all();
      return view('pages.flights', compact('flights'));
    }
}
