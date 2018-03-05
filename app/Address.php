<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //phone fill optional delete later
    protected $fillable=['address','country','city','state','zip','phone'];
}
