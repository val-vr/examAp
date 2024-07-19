<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'Mat'; 
   
    protected $fillable = [
        'nombre', 'a_p', 'a_m', 'correo', 'telefono', 'f_nac'
    ];

    public function alumnog(){
        return $this->hasOne(Alumnog::class, 'alumno_id', 'Mat');
    }
}
