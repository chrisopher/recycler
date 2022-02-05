<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Email extends Model
{
  public $table = 'emails';
    public $fillable = ['email'];   
}
