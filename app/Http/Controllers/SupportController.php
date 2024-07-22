<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    //
    public function index(){
        $nome = "Matuta Jorge";
        $idade = 10;
    
        return  view("site.home");
    } 
}
