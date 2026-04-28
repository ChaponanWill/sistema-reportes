<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grupo extends Model
{
    //
    protected $guarded = [];

    // Relación con Supervisor belongsTo
    public function supervisor():BelongsTo{
        return $this->belongsTo(Supervisor::class);
    }
}
