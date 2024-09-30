<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Town;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function welcome(request $request)
    {

        return view('welcome');


    }


    public function home(request $request)
    {

        $data['escorts'] = User::latest()->where('sub', 1)->where('status', 2)->get();
        return view('home', $data);


    }
}
