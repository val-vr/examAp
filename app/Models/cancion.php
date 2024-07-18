<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\album;
// use App\Models\artista;
class cancion extends Model
{
    use HasFactory;
    protected $table = 'cancions'; 
   protected $primaryKey = 'id_C';
    protected $fillable = ['nombre', 'duracion', 'album_id', 'artista_id'];

    public function album()
    {
        return $this->belongsTo(Album::class, 'album_id', 'id_Al');
    }

    public function artista()
    {
        return $this->belongsTo(Artista::class, 'artista_id', 'id_A');
    }
}
