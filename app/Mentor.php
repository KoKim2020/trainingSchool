<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
       protected $fillable = ['user_id','profile','portfolio','phone','address'];

       public function user($value='')
       {
       	return $this->belongsTo('App\User');
       }

}
