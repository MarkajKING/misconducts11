<?php

namespace App\Http\Controllers;

use App\Models\Confidant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ConfidantController extends Controller
{
    //Index page where all the confidants are shown for the user.
    public function index()
    {
        return view('confidant.confidants', [
            'confidants' => Confidant::latest()->get()
        ]);

    }


    public function adminIndex()
    {
        return view('admin.index', [
            'confidants' => Confidant::where('user_id','=', Auth::id())->get()
        ]);

    }


    //Show page where the selected confidants information is shown
    public function show($id)
    {
        $confidant = Confidant::find($id);

        return view('confidant.show', compact('confidant'));
    }

    //Create page where the confidant can write their information
    public function create(Confidant $confidant)
    {

        $confidant = new Confidant();
        return view('confidant.info', compact ('confidant'));
    }

    public function edit(Confidant $confidant) {

        return view('admin.edit', compact ('confidant'));

        if (\Auth::user()->is_confidant){
            return view('confidant.info');
        } else
        {
            abort(403);
        }


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
            'phone' => ['required', 'numeric', 'digits:10'],
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

        return redirect('/mijn-account/');
    }

    public function update(Confidant $confidant)
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

        if (isset($attributes['photo'])) {
            $attributes['photo'] = request()->file('photo')->store('photos');
        }


        $confidant->update($attributes);

        return redirect('/mijn-account');

    public function filterLanguage($language)
    {
        $confidants = Confidant::where('language', 'like', '%' . $language . '%')
        ->get();

        return view('confidant.confidants', compact('confidants'));

    }
}
