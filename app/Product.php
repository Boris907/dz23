<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','alias','price','description'];

    public function getRouteKeyName()
    {
        return 'alias';
    }

    //
    public function orders(){
        return $this->belongsToMany(Order::class);
    }
}
