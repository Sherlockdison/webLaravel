<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = [
      'size'
    ];

    public function products()
  	{
      return $this->hasMany(Product::class, 'size_id', 'id');
  	}
}
