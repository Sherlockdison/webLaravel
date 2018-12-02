<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filelable = [
      'name', 'description', 'price', 'stock', 'img1', 'size_id',
    ];

    public function size()
  	{
      return $this->hasOne(Size::class, 'id', 'size_id');
  	}

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
