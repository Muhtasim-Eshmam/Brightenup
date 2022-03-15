<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    protected $fillable = [
        'name',
        'ins',
        'fee',
        'duration',
        'location',
        'contact',
        'start',
        'tseat',
        'rseat',
        'status',
    ];







    use HasFactory;
}
