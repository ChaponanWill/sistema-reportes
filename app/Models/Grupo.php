<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Grupo extends Model
{
    //
    protected $guarded = [];

    // Relación con Supervisor belongsTo
    public function supervisor():BelongsTo{
        return $this->belongsTo(Supervisor::class);
    }

    // HasMany con Cosechador
    public function cosechadors():HasMany{
        return $this->hasMany(Cosechador::class);   

    }
}
