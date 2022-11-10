<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_admin) {
            $users = User::all();
            return view('admin.userview', compact('users'));
        } else {
            abort(403, 'Unauthorized action');
        }
    }

    public function confidantchecker(User $user)
    {
        if (Auth::user()->is_admin) {
            $currentState = $user->is_confidant;
            if ($currentState) {
                $newState = false;
            } else {
                $newState = true;
            }

            $user->is_confidant = $newState;
            $user->save();

            return redirect(route('admin.index'));
        } else {
            abort(403, 'Unauthorized action');
        }
    }
}
