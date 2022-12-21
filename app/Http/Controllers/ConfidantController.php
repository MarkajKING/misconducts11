<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Confidant;
use Illuminate\Support\Facades\Auth;

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
    }
}
