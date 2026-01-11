<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mu extends Model
{
    protected $fillable = ['cim', 'ev'];

    public function kapcsolatok()
    {
        return $this->hasMany(Kapcsolat::class);
    }
}
