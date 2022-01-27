<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecurityFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'featureid', 'featurename'
    ];
}
