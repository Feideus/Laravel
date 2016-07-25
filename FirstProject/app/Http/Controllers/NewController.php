<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class NewController extends Controller
{
  public function index()
  {
    return 'NewController works flowlessly';
  }

  public function TryOut()
  {
    $name = 'Erwan';
    $family = 'Ulrich';
    $pseudo = 'Feideus';
    return view('FirstViews/view2', compact('name','family', 'pseudo'));
  }

  public function Contact()
  {
    $name = 'Erwan';
    $family = 'Ulrich';
    $pseudo = 'Feideus';
    
    
    return view('FirstViews/view3', compact('name','family', 'pseudo'));
  }

  public function Datas()
  {
    $variables = [' Name = Erwan',' Age = 20',' Place of Work = Paris-13 University'];
    //$variables = [];

    return view('FirstViews/view4', compact('variables'));
  }
}
?>
