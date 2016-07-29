<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
  protected $fillable = ['name', 'surname', 'email', 'password', 'type', 'id'];
  public $timestamps = false;

}
