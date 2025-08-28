<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // query all users from the table 'users' using model
        $users = User::latest()->get();
        //$users = User::all();

        // return to view with $users (resources/views/users/index.blade.php)
        return view('users.index', compact('users'));
    }
    public function create()
    {
        return view('users.create');

    }
    public function store(Request $request)
    {
        // store in the table 'users' using model

        //POPO - Plain Old PHP Object
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->ic_no = $request->input('ic_no');
        $user->password = bcrypt($request->input('password'));
        $user->user_id = auth()->user()->id; //assign the logged in user id
        $user->save();

       //returns to users index
       return redirect('/users');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        //update using model

        $user->name = $request->name;
        $user->email = $request->email;
        $user->ic_no = $request->ic_no;
        $user->password = bcrypt($request->password);
        $user->save();

        //return to users index
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
