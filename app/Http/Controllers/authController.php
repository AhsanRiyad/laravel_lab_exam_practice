<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class authController extends Controller
{
     public static function loginCheck(Request $req){
     	$user = DB::table('user')->where('email', $req->email)->where('password', $req->password)->first();

     	return $user->email;

     	//return $req->email;
     }

     public static function login(Request $req){
     	return view('login');
     }
}
