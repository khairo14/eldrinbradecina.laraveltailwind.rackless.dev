<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $pageTitle = 'Users';
        $userModel = new User;
        $users = $userModel->all();
    
        return view('admin/users', compact('pageTitle','users'));
    }

    public function create_user(Request $request){
    
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'role' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        

        User::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'title' => $request['title'],
            'email' => $request['email'],
            'role' => '0',
            'password' => Hash::make($request['password']),
        ]);

     
        return redirect()->route('admin.users')
                        ->with('success','Post created successfully.');
    }

    
}
