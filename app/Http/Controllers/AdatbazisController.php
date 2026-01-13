<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kapcsolat;
use App\Models\Mu;
use App\Models\Alkoto;


class AdatbazisController extends Controller
{
    public function index()
    {
        $alkoto = Alkoto::all();
        $mu = Mu::all();
        $kapcsolat = Kapcsolat::all();
        //$kapcsolat = Kapcsolat::with(['mu', 'alkoto'])->get();
        return view('adatbazis', compact('alkoto', 'mu', 'kapcsolat'));
    }

}
