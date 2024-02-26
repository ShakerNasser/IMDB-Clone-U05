<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function show()
    {
        if (Auth::check() && Auth::user()->role != 2) {
            $users = User::all()->sortBy('name');
            return view('usersettings', ['users' => $users]);
        } else
         return back();
    }

    public function edit($id)
    {
        $user = User::find($id);
        if (auth::user()->role == 0) {
            return view('edit-user', compact('user'));
        } else return back();
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->created_at = $request->input('created_at');
        $user->role = $request->input('role');
        $user->update();
        if (auth::user()->role == 0) {
            return redirect('usersettings')->with('status', 'The user has been updated!');
        } else return back();
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('usersettings')->with('status', 'The user has been deleted!') ;
    }


/*

OBBBBBSSSS!!!! DENNA LÄGGS IN INNAN PRESENTATION - ERSÄTTER RAD 14
public function show()
{
    $users = User::all()->sortBy('name');
    if (auth::user()->role == 0) { 
        return view('usersettings', ['users' => $users]);
    } else return back();
}

*/



    
}