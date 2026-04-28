<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supervisor extends Model
{
    protected $guarded = [];
    // belongsTo General
    public function general():BelongsTo{
        return $this->belongsTo(General::class);
    }
    // hasMany Grupo
    public function grupos():HasMany{
        return $this->hasMany(Grupo::class);
    }
}
