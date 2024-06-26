<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examples extends Model
{
  
    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function ejemplar()
    {
        return $this->belongsTo(Examples::class);   
    }
}
