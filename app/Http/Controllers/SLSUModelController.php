<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SLSUModelController extends Controller
{
    public function slsu_model(){
        return view('home.slsumodel',[
            'title' => '3D Model'
        ]);
    }
}
