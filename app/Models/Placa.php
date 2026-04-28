<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Placa extends Model
{
    protected $guarded =[];
    // HasMany cosechadores
    public function cosechadores():HasMany{
        return $this->hasMany(Cosechador::class);
    }
}
