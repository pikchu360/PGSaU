<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SocialWork;
use App\Image;

class PageController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function home(){
        return view('home');
    }

    public function open($slug){
        $sworks = SocialWork::latest()->paginate(5);
        $imagen = Image::latest()->paginate(5);
        return view($slug, compact('sworks','slides','imagen'));
    }
}
