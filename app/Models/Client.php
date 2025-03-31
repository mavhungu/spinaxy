<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = ['client_name', 'bussiness_name', 'email', 'phone_number', 'address'];
}
