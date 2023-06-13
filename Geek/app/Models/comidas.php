<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comidas extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'calorias', 'proteinas', 'grasas', 'carbohidratos'];
}
    