<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [

        'title',
        'image',

    ];

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
