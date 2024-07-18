<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artista extends Model
{
    use HasFactory;
    protected $table = 'artistas'; 
    protected $primaryKey = 'id_A';
    protected $fillable = [
        'nombre',
        'apodo',
        'fecha_nacimiento',
    ];

    public function canciones()
    {
        return $this->hasMany(cancion::class);
    }
}
