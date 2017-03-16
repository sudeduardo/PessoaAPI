<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
     protected $hidden = array('created_at', 'updated_at');

}
