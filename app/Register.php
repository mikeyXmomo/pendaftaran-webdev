<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'users_register';
    protected $fillable = ['nama','nrp','kelas','email','no_wa','id_line'];
}
