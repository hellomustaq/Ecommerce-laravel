<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=['name','description','size','price','catagory_id','image'];
    public function category()
    {
      return belongsTo(Category::class);
    }

}
