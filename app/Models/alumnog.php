<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnog extends Model
{
    use HasFactory;

    protected $fillable = ['alumno_id', 'grupo_id'];
    public $timestamps = false;

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'alumno_id');
    }
    
    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }
}

