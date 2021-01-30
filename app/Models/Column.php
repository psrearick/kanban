<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    protected $fillable = ['name', 'active'];

    protected $casts = [
        'active' => 'boolean'
    ];
}
