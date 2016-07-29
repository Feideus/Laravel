<?php

use App\Utilisateur;

$Thename = htmlentities($_POST["name"]);
$Thesurname = htmlentities($_POST["surname"]);
$Theemail = htmlentities($_POST["email"]);
$Thepassword = htmlentities($_POST["password"]);
$Thetype = htmlentities($_POST["type"]);
$Theid = htmlentities($_POST["id"]);


if(!($Thetype === "admin" || $Thetype === "standard"))
  {echo  "There was an error with your type entry"; 
    return false;}
if(!filter_var($Theemail, FILTER_VALIDATE_EMAIL))
  {echo "There was an error with your email entry";
    return false;}

$user = Utilisateur::where('id', $Theid)->first();

$user->update(array('name' => $Thename, 'surname' => $Thesurname, 'email' => $Theemail, 'password' => $Thepassword, 'type' => $Thetype, 'id' => $Theid));
?>