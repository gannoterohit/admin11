<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiController extends Controller
{
    
    public function test(){ 
        $value=['name'=>'admin','phone'=>'8y83838383838'];
        // echo"harda";
        return response()->json(['status' => true, 'data'=>$value]);
    }

    public function applogin(Request $request){
        $post_data=$request->all();
        return response()->json(['status' => true, 'data'=>$post_data]);
    }
    //
}
