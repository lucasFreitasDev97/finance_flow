<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
        'amount',
        'income_date',
        'description'
    ];

    protected $casts = [
        'income_date' => 'date',
    ];
}
