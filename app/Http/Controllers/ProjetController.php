<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\nom_projet;
use Illuminate\Http\Request;

class ProjetController{

    function lister(){
        $A_projet = nom_projet::all();
        return view("FormeProjet", ["nom_projet" => $A_projet]);
    }

    function ajoutProjet(Request $request){
        $P_Projet = new nom_projet();

        $P_Projet->nom = $request->nom;
        $P_Projet->date_debut = $request->Date_debut;
        $P_Projet->date_fin = $request->Date_fin;
        $P_Projet->description = $request->Description;
        $P_Projet-> save();

        return redirect()->route("projet");
        
    }
   

}
