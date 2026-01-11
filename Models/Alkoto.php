<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alkoto extends Model
{
    protected $fillable = ['nev'];

    public function kapcsolatok()
    {
        return $this->hasMany(Kapcsolat::class);
    }
}

