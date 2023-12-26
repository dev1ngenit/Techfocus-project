<?php

namespace App\Http\Controllers\Client;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    
    public function dashboard()
    {
        // return view('auth.login');
        return view('frontend.pages.client.dashboard');
    }
    public function profile()
    {
        // return view('auth.login');
        return view('frontend.pages.client.profile');
    }
    public function subscription()
    {
        // return view('auth.login');
        return view('frontend.pages.client.subscription');
    }
    public function favourites()
    {
        // return view('auth.login');
        return view('frontend.pages.client.favourites');
    }
    public function requests()
    {
        // return view('auth.login');
        return view('frontend.pages.client.requests');
    }
}
