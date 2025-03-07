<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zoom extends Model
{
    use HasFactory;

    protected $table = 'zooms';
    protected $fillable = ['zoom'];

    public function imagenes()
    {
        return $this->hasMany(Imagen::class);
    }
}