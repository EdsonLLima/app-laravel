<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function register()
    {
        return view('user-registration');
    }

    public function equipments()
    {
        return view('equipments');
    }
}
