<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title','alias','content'];

    public function getRouteKeyName()
    {
        return 'alias';
    }
}
