<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Description;

class DescriptionController extends Controller
{
  public function index()
  {
    $Description = Description::all();

    return view('FirstViews/index', compact('Description'));
  }
}
