<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{

    public function index()
    {
        $admins = User::latest()->paginate(10);;

        return view('backend.admin.index',compact('admins'));
    }


    public function create()
    {
        return view('backend.admin.create');
    }



    public function store(Request $request){
        $admin = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);


        $admin['password'] = bcrypt($admin['password']);


        $user = User::create($admin);


        auth()->login($user);

        return redirect()->route('admin.index')->with('message', 'Admin created');
    }





    public function destroy($id)
    {
        $id->delete();
        return redirect()->route('admin.index')->withMessage(' Deleted');
    }
}
