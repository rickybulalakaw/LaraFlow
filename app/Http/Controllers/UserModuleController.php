<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserModuleController extends Controller
{
    //

    public function home() {

        
    }

    public function personnel () {
        
        // $module = "personnel";
        return view ('personnel.home', 
        // [
        //     'module' => $module
        // ]
        );

    }

    public function recruit () {
        
        return view ('recruit.home');
    }


    
    public function perform () {
        return view ('perform.home');
    }


    
    public function learn () {

        return view ('learn.home');
    }
    
    public function recognize () {

        return view ('recognize.home');
    }



    public function core () {

        return view ('core.home'
    );
        
        // return "Core";
    }

    public function plan () {

        return view ('plan.home');
    }




}
