<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Utilisateur;

class editUserController extends Controller
{
  public function index($id)
  {
    $user = Utilisateur::where('id', $id)->get()->toArray();
    return view('AtalanViews/view3', compact('user'));
  }

  public function miseAJour()
  {
    include(app_path().'/phpScripts/UpdateUser.php');
    return redirect()->action('WelcomeController@index');
  }
}
