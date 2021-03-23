<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $pageTitle = 'Profile';

        return view('admin/profile', compact('pageTitle'));
    }

    public function update_profile(Request $request){

        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
        ]);

        User::update($request->all());

        return redirect()->route('admin.profile')
                        ->with('success','Update profile successfully.');

    }
}
