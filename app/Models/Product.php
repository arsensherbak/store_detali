<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;


    protected $table = 'products';
    protected $guarded = false;
    protected $withCount = ['likes'];

    public function likes(){
        return $this->belongsToMany(User::class, 'product_user_likes', 'product_id','user_id');
    }
}
