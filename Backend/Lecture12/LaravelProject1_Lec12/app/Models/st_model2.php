<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class st_model2 extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','email','grade'
    ];
}
