<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learningactivity extends Model
{
    use HasFactory;
    protected $primaryKey = 'learningactivity_id';

    protected $fillable = [
        'learningactivity_id',
        'user_id',
        'metode',
        'januari',
        'februari',
        'maret',
        'april',
        'mei',
        'juni',
    ];

}
