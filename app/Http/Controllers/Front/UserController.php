<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Front\VerifiesEmails;

class UserController extends Controller
{
   
public function AdminName(){

    return 'Somaiah';
} 


public function getIndex(){
    $obj = new \stdClass();

  //$obj= [ ];
 // $obj -> name = 'soso';
  //$obj -> id = 25;
  //$obj -> gender = '25';


    $data =[];

    return view('welcome', compact ('data'));
} 


}
