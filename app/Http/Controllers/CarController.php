<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        return "index";
    }

    public function __invoke(){
        return 'return invokable';
    }
}
