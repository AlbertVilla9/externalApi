<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class FormController extends Controller
{

    public function __construct() {}

    public function crear(Request $request)
    {
        $digimon = HTTP::get('https://digimon-api.vercel.app/api/digimon/level/'. $request->digimon_level);
        $digimonArray = $digimon->json();
        $i = 0;

        return view('home', compact('digimonArray', 'i'));
    }
}
