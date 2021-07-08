<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;
    protected $fillable = [
        'production_date',
        'train_model',
        'brand_id',

    ];

    public function trips(){
        return $this->hasMany(Trips::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
