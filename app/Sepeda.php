<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sepeda extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class, 'sepeda_id', 'id');
    }
}
