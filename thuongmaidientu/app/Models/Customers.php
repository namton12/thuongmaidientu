<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
   protected $table = 'customers';
   protected $fillable =['iduser','address','email','phone','active',];
   public function User(){
   	return $this-> belongsTo('App\Models\User','iduser','id');
   }
}
