<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class nom_projet extends Model
{
   
    public function Phase(): HasMany
    {
        return $this->hasMany('App\Models\Phase', 'idphase', 'id');
    }
    use HasFactory;
}
