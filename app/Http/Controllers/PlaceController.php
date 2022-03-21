<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PlaceController extends Controller
{
    public function index(){
        return view('index');
    }

    public function storePlace(Request $request){
        $store = $_POST['information']; 
        $desc = $_POST['desc'];
        $arr = array();
        $d = "";
        $s = "";

        $store_size = sizeof($_POST['information']); 
        $desc_size = sizeof($_POST['desc']);
        
        for ($i=0; $i < $store_size; $i++) { 
            for ($j=0; $j < $desc_size ; $j++) { 
                    if ($i === $j) {
                        $arr += array($desc[$j] => $store[$i]);
                        $d = $desc[$j];
                        $s = $store[$i];

                        DB::table('second_tables')->insert([
                            'reference_table' => $d,
                            'value' => $s
                        ]);
                        $json = json_encode($arr);


                    }
            }
        }
        
        DB::table('first_tables')->insert([
            'json_detail' => $json
        ]);
        
        dd($json); die();
        return dd($json);
    }
}
