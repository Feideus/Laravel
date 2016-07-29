<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;

use App\Utilisateur;

class addUserController extends Controller
{
  public function index()
  {

      return view('AtalanViews/view4');
  }

  public function store(Request $request)
  {
    $rules = array(
        'name'             => 'required',
	'surname'          => 'required',
        'email'            => 'required|email',
        'password'         => 'required',
        'type' => 'required');

    $this->validate($request,$rules);
    
    $user = new Utilisateur;
    $user->name     = Input::get('name');
    $user->surname  = Input::get('surname');
    $user->email    = Input::get('email');
    $user->password = Input::get('password');
    $user->type     = Input::get('type');
    include(app_path().'/phpScripts/createUser.php');
    return Redirect::to('/');

  }

  public function addUp()
  {
    return redirect()->action('WelcomeController@index');
  }
}
