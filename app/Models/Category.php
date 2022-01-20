<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    public function categories(){
        return $this->belongsTo(Category::class);
    }

    public function keyboard(){
        return $this->hasMany(Keyboard::class);
    }
}
