<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Supervisor extends Model
{
    protected $guarded = [];
    // belongsTo General
    public function general():BelongsTo{
        return $this->belongsTo(General::class);
    }
}
