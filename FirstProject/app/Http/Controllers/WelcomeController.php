<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;


class WelcomeController extends Controller
{
    /**
     * Basic Controller model
     *
     * Index function called on '/' Url 
     * Others called on '/myfunction' Url
     */
    public function index()
    {
        return view('welcome');
    }

    public function contact()
    {
      return view('FirstViews/view1');
    }
}