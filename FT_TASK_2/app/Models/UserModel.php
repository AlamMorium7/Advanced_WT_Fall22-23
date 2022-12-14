<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class UserModel extends Model
{
    //use fastcare;
    //public $table ='users';
protected $table='patient';
protected $primaryKey = 'P_ID';
public $timestamps = false;

}
?>