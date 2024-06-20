<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $primaryKey = 'codigo';

    use HasFactory;
    //add name and email to fillable
    protected $fillable = ['descripcion', 'precio'];
}
