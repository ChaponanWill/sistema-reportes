<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cosechador extends Model
{
    protected $guarded = [];

    // BelongsTo placa
    public function placa():BelongsTo{
        return $this->belongsTo(Placa::class);
    }
}
