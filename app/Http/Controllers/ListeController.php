<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\nom_projet;
use Illuminate\Http\Request;

class ListeController{
    function viewP(){
        $view_projet = nom_projet::all();
        return view("ViewProjet",compact('view_projet'));
        
    }
    
    
}