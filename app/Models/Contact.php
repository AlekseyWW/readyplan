<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    public $table = 'contact';
    public $fillable = ['name','email','message', 'position', 'company', 'phone', 'subject'];
}
