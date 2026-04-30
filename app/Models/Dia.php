<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dia extends Model
{
    //
    protected $guarded = [];
    // belongs to cosechador, grupo, placa
    public function cosechador():BelongsTo{
        return $this->belongsTo(Cosechador::class);
    }
    public function grupo():BelongsTo{
        return $this->belongsTo(Grupo::class);
    }
    public function placa():BelongsTo{
        return $this->belongsTo(Placa::class);
    }
}
