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

        $confidants = Confidant::all();
        return view('confidant.confidants', compact('confidants'));
    }


    public function show($id)
    {
        $confidant = Confidant::find($id);
        return view('confidant.show')->with('confidant', $confidant);
    }

    public function edit($id)
    {
        $confidant = Confidant::find($id);
        return view('admin.edit')->with('confidant', $confidant);
    }

    public function destroy($id)
    {
        Confidant::destroy($id);
        return redirect('confidant')->with('flash_message', 'Confidant deleted!');
    }

    public function addConfidant(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if ($request->has('gedoeAdd')) {
            $user->confidant_id = $request->input('gedoeAdd');
        } elseif ($request->has('gedoeRemove')) {
            $user->confidant_id = null;
        }
        $user->save();

        return redirect('list')->with('flash_message', 'Confidant updated!');

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


    //Create page where the confidant can write their information
    public function create(Confidant $confidant)
    {
        $confidant = new Confidant();
        return view('confidant.info', compact ('confidant'));
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
            'excerpt' => 'required|min:10|max:500',
            'about' => 'required|min:100',
            'experiences' => 'required|min:100',
            'motto' => 'required|min:1|max:30',
        ]);

        $attributes['user_id'] = Auth::user()->id;
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
            'phone' => ['required', 'numeric', 'digits:10'],
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
    }

    public function filterLanguage($language)
    {
        $confidants = Confidant::where('language', 'like', '%' . $language . '%')
        ->get();

        return view('confidant.confidants', compact('confidants'));

    }
}
