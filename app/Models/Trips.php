<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    use HasFactory;

    protected $fillable = [
        'train_id',
        'star',
        'Origin',
        'price',
        'off_price',
        'time',
        'destination',

    ];

    public function train()
    {
        return $this->belongsTo(Train::class ,'train_id');
    }
}
