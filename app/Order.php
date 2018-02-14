<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['total','delivered'];

    public function orderItems(){
      return $this->belongsToMany(Product::class)->withPivot('qty','total')->withTimestamps();
    }
    public function user(){
      return $this->belongsTo(User::class);
    }
}
