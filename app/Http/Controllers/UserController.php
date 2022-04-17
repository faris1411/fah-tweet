<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup()
    {
        return view('users/signup');
    }
    public function create(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->image = '/user_images/default.png';
        $user->save();
        return redirect('users');
    }
    public function index() 
    {
        return view('users/index', ['users' => User::all()]);
    }
    public function show($id) 
    {
        return view('users/show', ['user' => User::find($id)]);
    }
}
