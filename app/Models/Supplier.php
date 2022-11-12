<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'desctiption'];

    public function transition()
    {
        return $this->hasMany(ProductAddTransition::class);
    }
}
