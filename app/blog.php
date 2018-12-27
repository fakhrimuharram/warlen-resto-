<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    //fillable fields
    protected $fillable = ['title', 'alamat','content'];
    
    //custom timestamps name
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
}