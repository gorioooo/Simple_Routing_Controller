<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index(){
        $about = array(
            "name" => "November",
            "age" => 20,
            "email" => "november16nn@gmail.com"
        );
        return view('aboutme', $about);
    }
}