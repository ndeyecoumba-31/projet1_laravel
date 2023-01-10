<?php

namespace App\Http\Controllers;
use App\Models\nom_projet;
use Illuminate\Http\Request;

class DetailController{
    public function DetailP(){
        $D_projet = nom_projet::all();
        return view("DetailProjet",  compact('D_projet'));
        
    }

    function detailProjet(){
        return redirect()->route("phase");
        
    }

//    public function DetailP($id){
//         $D_projet = nom_projet::find($id);
//         return view("DetailProjet", compact('D_projet'));
        
//     }


    public function edit($id)
    {
        $detail= nom_projet::findOrFail($id);
        return view('DetailProjet', compact('detail'));
    }

    
   
}