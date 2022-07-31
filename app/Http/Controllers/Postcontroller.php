<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Illuminate\Support\Facades\Auth;





use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
            'caption'=>'required',
            'image'=>['required','image']
        ]);
          

    $image = request('image')->store('uploads','public');
        
        (auth()->user()->posts()->create([
                
            'caption'=>$data['caption'],
            'image'=> $image,
    ]));
            
        return redirect('/profile/'.auth()->User()->id);
    }
}    


