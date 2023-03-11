<?php

namespace Kovyakin\Editor\Http\Controllers;

use Illuminate\Http\Request;
use Kovyakin\Editor\Models\Headers;
use Kovyakin\Editor\Models\Num;

class EditorController extends Controller {
    public function index(){
        $last_num = Num::orderBy('id','desc')->first();
        if($last_num){
            $last_num = $last_num->id;
            $headers = Num::find($last_num)->headers;
        }
       else{
           $headers=[];
       }
        return view('editor::index')->with([
            'headers'=>$headers,
        ]);
    }

    public function insert(Request $request){
       $request->validate([
           'color'=>'max:10',
           'backgroungcolor'=>'max:10',
       ]);
    }
}
