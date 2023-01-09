<?php

namespace App\Http\Controllers;

use App\Models\Confidant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Confidant $confidant)
    {
        return view('home', [
        'confidant' => $confidant
    ]);
    }

    public function userGuide()
    {
        return view ('userguide');
    }
}
