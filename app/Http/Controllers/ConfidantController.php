<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfidantController extends Controller
{
    public function index()
    {
        return view('list');
    }
}
