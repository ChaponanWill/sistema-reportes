<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cosechador extends Model
{
    protected $guarded = [];

    // BelongsTo placa
    public function placa():BelongsTo{
        return $this->belongsTo(Placa::class);
    }

    // HasMany dias
    public function dias():HasMany{
        return $this->hasMany(Dias::class);
    }
}
