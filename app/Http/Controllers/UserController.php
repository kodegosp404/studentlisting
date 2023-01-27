<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return 'Hello from UserController';
    }

    public function show($id) {
        $data = ["data" => "data from database"];
        return view('user')
                ->with('data' , $data)
                ->with('name', 'Kodego SP404 Class')
                ->with('age','19')
                ->with('email', 'sp404@kodego.com.ph')
                ->with('id',$id);
    }
}

