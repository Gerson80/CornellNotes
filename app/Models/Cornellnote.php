<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Cornellnote extends Model
{
    use HasFactory;

    //relacion con con los users
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //relacion con las topics
    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }

    //---------- ACCESORS ----------
        // Mostrar texto en mayuscula
    public function getTituloAttribute($value)
    {
        return strtoupper($value);
    }
        // Dividir las palabras clave en un array de palabras
    public function getPalabrasClaveAttribute($value)
    {
        return explode(',', $value);
    }
        // Mostrar la conclusion en mayuscula
    public function getConclusionAttribute($value)
    {
        return strtoupper($value);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->isoFormat('dddd D [de] MMMM [del] YYYY');
    }
    //------------------------------


    // ---------- MUTATORS ----------
        // el Titulo se guardara en minusculas
    public function setTituloAttribute($value)
    {
        $this->attributes['titulo'] = strtolower($value);
    }
        // el Texto se guardara en minusculas
    public function setTextoAttribute($value)
    {
        $this->attributes['Texto'] = strtolower($value);
    }
        // la Conclusion se guardara en minusculas
    public function setConclusionAttribute($value)
    {
        $this->attributes['Conclusion'] = strtolower($value);
    }
        // Palabras clave las guardara como un array sin los espacios
    public function setPalabrasClaveAttribute($value)
    {
        $this->attributes['PalabrasClave'] = str_replace(' ', '', $value);
    }
    //-------------------------------
}