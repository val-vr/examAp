<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    public $timestamps = false; 
protected $primaryKey = 'cve';
    protected $fillable = [
       'grado', 'seccion', 'area', 'turno', 'tutor'
    ];

    public function alumnog(){
        return $this->hasMany(Alumnog::class, 'grupo_id', 'cve');
    }
}

