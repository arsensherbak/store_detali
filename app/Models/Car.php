<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $guarded = false;

    public function categories(){
        return $this->hasMany(Category::class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }

}
