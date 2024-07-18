<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    use HasFactory;
    protected $table = 'albums'; 
    protected $primaryKey = 'id_Al';
    protected $fillable = ['nombre', 'portada', 'fecha_lanzamiento'];

    public function canciones()
    {
        return $this->hasMany(cancion::class);
    }
}
