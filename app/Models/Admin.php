<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{

    use Notifiable;

    protected $table="admins";
    protected $fillable =['name','photo','email','password','created_at','updated_at'];

     //remeber token mean تذكرنى
    protected $hidden = [
        'password', 'remember_token',
    ];
}
