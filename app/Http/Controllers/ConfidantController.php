<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Confidant;
use Illuminate\Support\Facades\Auth;
======
use Illuminate\Validation\Rule;


class ConfidantController extends Controller
{
    //Index page where all the confidants are shown for the user.
    public function index()
    {

        $confidants = Confidant::all();
        return view('confidant.list', compact('confidants'));
    }

    public function create()
    {
        return view('confidant.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Confidant::create($input);
        return redirect('confidant')->with('flash_message', 'Confidant saved!');
    }

    public function show($id)
    {
        $confidant = Confidant::find($id);
        return view('confidant.show')->with('confidant', $confidant);
    }

    public function edit($id)
    {
        $confidant = Confidant::find($id);
        return view('confidant.edit')->with('confidant', $confidant);
    }

    public function update(Request $request, $id)
    {
        $confidant = Confidant::find($id);
        $input = $request->all();
        $confidant->update($input);
        return redirect('confidant')->with('flash_message', 'Confidant updated!');
    }

    public function destroy($id)
    {
        Confidant::destroy($id);
        return redirect('confidant')->with('flash_message', 'Confidant deleted!');
    }

    public function addConfidant(Request $request)
    {
//        dd($request);
        $user = User::find(Auth::user()->id);
        if ($request->has('gedoeAdd')) {
            $user->confidant_id = $request->input('gedoeAdd');
        } elseif ($request->has('gedoeRemove')) {
            $user->confidant_id = null;
        }
        $user->save();

        return redirect('list')->with('flash_message', 'Confidant updated!');
=======
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
    public function show($id)
    {
        $confidant = Confidant::find($id);

        return view('confidant.show', compact('confidant'));
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

        return redirect('/admin/mijn-account');
    }

    public function filterLanguage($language)
    {
        $confidants = Confidant::where('language', 'like', '%' . $language . '%')
        ->get();

        return view('confidant.confidants', compact('confidants'));
    }
}
