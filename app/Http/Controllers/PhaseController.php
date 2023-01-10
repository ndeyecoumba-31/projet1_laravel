<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\nom_projet;
use Illuminate\Http\Request;

class PhaseController{

    function PhaseP(){
        $Phase_projet = nom_projet::all();
        return view("PhaseProjet", ["nom_projet" => $Phase_projet]);
    }
}