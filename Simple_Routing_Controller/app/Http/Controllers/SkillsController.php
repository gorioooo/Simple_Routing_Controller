<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
      public function index(){
        $skills = array(
            "skill_one" => "Skillfull in Figma",
            "skill_two" => "Skillfull in Adobe Photoshop",
            "skill_three" => "Playing Drums and Rubiks Cube"
        );
        return view('skills', $skills);
    }
}