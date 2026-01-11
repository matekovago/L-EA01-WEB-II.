<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kapcsolat extends Model
{
    protected $fillable = ['mu_id', 'alkoto_id', 'tipus'];

    public function mu()
    {
        return $this->belongsTo(Mu::class);
    }

    public function alkoto()
    {
        return $this->belongsTo(Alkoto::class);
    }
}
