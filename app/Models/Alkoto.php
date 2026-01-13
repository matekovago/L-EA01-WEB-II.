<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alkoto extends Model
{
    protected $table = 'alkoto';
    protected $fillable = ['id', 'nev'];

    public function kapcsolatok()
    {
        return $this->hasMany(Kapcsolat::class);
    }
}

