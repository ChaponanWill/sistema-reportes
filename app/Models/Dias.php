<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dias extends Model
{
    protected $guarded = [];
    // BelongsTo cosechador y Grupo
    public function cosechador():BelongsTo{
        return $this->belongsTo(Cosechador::class);
    }
    public function grupo():BelongsTo{
        return $this->belongsTo(Grupo::class);
    }
}
