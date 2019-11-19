<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
  protected $fillable = ['id','password'];
  protected $protected = ['password'];


    protected $hidden = [];

}
