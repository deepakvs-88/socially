<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Profilecontroller extends Controller
{
    function index($user)
    {
        $user = User::findOrFail($user);
        return view('profiles.index',['usr'=>$user]);
    }
}
