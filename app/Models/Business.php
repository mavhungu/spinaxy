<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    //
    protected $fillable = [
        'bussiness_name',
        'email',
        'address',
        'phone_number'
    ];
}
