<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultancyController extends Controller
{
    public function index()
    {  
        return view('consultants.index');
    }
}
