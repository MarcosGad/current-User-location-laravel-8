<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function userDetails(Request $request)
    {
        $ip = '49.35.41.195'; //For static IP address get
        //Dynamic IP address get
        //$ip = \Request::ip();
        //$ip = $request->ip();
        //$ip = \Request::getClientIp(true);
        //dd($ip);  
        $data = \Location::get($ip);                
        return view('details',compact('data'));
    }
}