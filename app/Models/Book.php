<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Example; 

class Book extends Model
{
    use HasFactory;

    public function ejemplar()
    {
        return $this->hasMany(Examples::class);
    }
}