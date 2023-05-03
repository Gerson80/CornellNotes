<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subject extends Model
{
    use HasFactory;

    //Relacion con los topicos
    public function topics(): HasMany
    {
        return $this->hasMany(Topic::class);
    }

    //Relacion con los bugs
    public function bugs(): HasMany
    {
        return $this->hasMany(Bug::class);
    }

    //Relacion muchos a muchos con la tabla users
    public function users()
    {
        return $this->belongsToMany(User::class)->using(Relation::class);
    }
}