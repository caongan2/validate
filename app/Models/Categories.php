<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    function products() {
        return $this->hasMany(Products::class);
    }

    protected $table = 'categories';
}
