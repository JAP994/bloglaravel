<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate();
        return view('users.index', compact('users'));
    }

    public function create(){
        return view('users.create');
    }

    public function show($id){
        $user= User::find($id);
        return view('users.show',compact('user'));
    }
   
}
