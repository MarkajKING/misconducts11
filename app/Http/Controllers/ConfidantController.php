<?php

namespace App\Http\Controllers;

use App\Models\Confidant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ConfidantController extends Controller
{
    //Index page where all the confidants are shown for the user.
    public function index()
    {
        return view('confidant.confidants', [
            'confidants' => Confidant::all()
        ]);

    }

    //This function refers to the admin page which will be changed but i just needed it for now :)
    public function all(Confidant $confidant)
    {
        return view('admin.index', [
            'confidant' => $confidant
        ]);
    }

    //Show page where the selected confidants information is shown
    public function show (Confidant $confidant)
    {
        return view('confidant.show', [
            'confidant' => $confidant
        ]);
    }

    //Create page where the confidant can write their information
    public function create()
    {
        return view('confidant.info');
    }

    //Function to store the written information in the database
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'age' => 'required|max:2|min:1',
            'gender' => 'required',
            'background' => 'required|min:3|max:25',
            'language' => 'required',
            'phone' => ['required','numeric', 'digits:10'],
            'email' => ['required', 'email', 'min:3'],
            'photo' => ['required', 'image'],

            'speciality' => 'required',
            'excerpt' => 'required|max:400|min:100',
            'about' => 'required|min:100',
            'experiences' => 'required|min:100',
            'motto' => 'required|min:1|max:30',
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['photo'] = request()->file('photo')->store('photos');

        Confidant::create($attributes);

        return redirect('/admin/mijn-account');
    }

}
