<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index(){
        $data = "Photography, Editing, Ui Designing";
        return view("hobbies", ["hobby" => $data]);
    }
}