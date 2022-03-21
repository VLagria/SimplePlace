<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index(){
        return view('index');
    }

    public function storePlace(Request $request){
        $store = $_POST['information']; 
        dd($store); die();
        return dd($store);
    }
}
