<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\Frontusers;

class FrontusersController extends Controller
{
    public function store(Request $request){
        // echo "<pre>";
        // print_r($request->all());

        
        //insert query-> insert data into database
        $frontuser = new Frontusers;
        
        
        $frontuser->username = $request['username'];
        $frontuser->useremail = $request['useremail'];
        $frontuser->userpassword = md5($request['userpassword']); //to encode password
        $frontuser->referrals = $request['referrals'];
        $frontuser->points = $request['points'];
        $frontuser->actions = $request['actions'];

        $frontuser->save();

        return view('layouts.userapp');

    }

    public function view(){

    }
}
