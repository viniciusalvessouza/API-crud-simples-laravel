<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrimeiraApi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomecompleto',
        'email',
        'linkeding'
    ];

}
