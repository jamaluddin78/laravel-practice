<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
//        return 'Hello World form controller';
        $name = 'Jamal Uddin';
        return view('demo',compact('name'));

        return view('demo');
//        return view('admin.home.home');
    }
    public function newOne(){
       return 'hello new one';
    }
    public function newTwo(){
        return 'hello new two';
    }
}
