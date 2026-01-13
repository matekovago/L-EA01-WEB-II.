<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kapcsolat extends Model
{
    protected $table = 'kapcsolat';
    protected $fillable = ['mu_id', 'tipus', 'alkoto_id'];

    public function mu()
    {
        return $this->belongsTo(Mu::class);
    }

    public function alkoto()
    {
        return $this->belongsTo(Alkoto::class);
    }
}
