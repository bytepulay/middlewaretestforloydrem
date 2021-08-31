<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiTokenCheckController extends Controller
{
    
    public function checkToken(Request $request){
        return response()->json(['status'=>'ok',"description"=>"api token is valid so you can request our system api"]);
    }

    public function addData(Request $request){
        
        return response()->json(['status'=>'ok',"description"=>"api token is valid so you can insert data to our system "]);
    }

    public function viewData(Request $request){
        return response()->json(['status'=>'ok',"description"=>"api token is valid so you can view data from our system "]);
    }

    public function deleteData(Request $request){
        return response()->json(['status'=>'ok',"description"=>"api token is valid so you can delete data at our system "]);
    }

    public function EditData(Request $request){
        return response()->json(['status'=>'ok',"description"=>"api token is valid so you can edit data at our system"]);
    }
}
