<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function s1(){
        $id = request('id');
        return view('javascript_practice.' . $id);
    }

    public function vueSession(){
        $id = request('id');
        return view('learning_vueJS.' . $id);
    }

    public function jsSession(){
        $id = request('id');
        return view('dataStructuresAndAlgorithems.' . $id);
    }
}
