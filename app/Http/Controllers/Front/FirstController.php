<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class FirstController extends Controller
{

    public function __construct(){

        $this -> middleware('auth')-> except('showString33');
    }
    public function showString(){

        return 'world stil Nice';
    }

    public function showString2(){

        return 'world stil Nice22';
    }

    public function showString33(){

        return 'wnot';
    }
}
//$this -> middleware ( middleware;'auth');