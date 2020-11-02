<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    public function children()
    {
        return $this->hasMany($this, 'parent_id');
    }

    public function scopeParent($query)
    {
        return $query->where('parent_id', null);
    }
}