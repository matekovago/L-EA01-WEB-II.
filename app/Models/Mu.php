<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mu extends Model
{
    protected $table = 'mu';
    protected $fillable = ['id', 'cim', 'eredeti', 'szinhaz', 'ev', 'felvonas', 'kep'];

    public function kapcsolatok()
    {
        return $this->hasMany(Kapcsolat::class);
    }
}
