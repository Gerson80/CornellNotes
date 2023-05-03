<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Bug extends Model
{
    use HasFactory;

    //Relacion con los users
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //Relacion con los subjects
    public function subject():BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
    
    // ---------- ACCESORS ----------
        // la Descripcion se mostrara en minusculas con la primera letra en mayuscula
    public function getDescripcionAttribute($value)
    {
        return ucfirst(strtolower($value));
    }

        // el Codigo se muestra en mayusculas
    public function getCodigoAttribute($value)
    {
        return strtoupper($value);
    }

        // la Solucion se mostrara en minusculas con la primera letra en mayuscula
    public function getSolucionAttribute($value)
    {
        return ucfirst(strtolower($value));
    }

        // la Plataforma se mostrara en mayusculas
    public function getPlataformaAttribute($value)
    {
        return strtoupper($value);
    }

        // Definimos el accessor para el campo "created_at"
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->isoFormat('dddd D [de] MMMM [del] YYYY');
    }
        // los Estados se mostraran como strings dependiendo el numero
    public function getEstadoAttribute($value)
    {
        $estados = [
            1 => 'Corregido',
            2 => 'No corregido',
            3 => 'En proceso',
            4 => 'No oficial',
            5 => 'Error de la versión'
        ];

        return $estados[$value] ?? 'Desconocido';
    }
    //-------------------------------

    // ---------- MUTATORS ----------
        // la Descripcion se guardara en minusculas
    public function setDescripcionAttribute($value)
    {
        $this->attributes['descripcion'] = strtolower($value);
    }
        // el Codigo se guardara en minusculas
    public function setCodigoAttribute($value)
    {
        $this->attributes['codigo'] = strtolower($value);
    }
        // la Solucion se guardara en minusculas
    public function setSolucionAttribute($value)
    {
        $this->attributes['solucion'] = strtolower($value);
    }
        // la Plataforma se guardara en minusculas
    public function setPlataformaAttribute($value)
    {
        $this->attributes['plataforma'] = strtolower($value);
    }
}