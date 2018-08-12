<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    public function standardRoom()
    {
        return view('services.rooms.standard');
    }
}
