<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    protected $table = 'lab';
    protected $fillable = [
        'lab_id',
        'lab_name',
        'lab_schedule',
        'lab_Room',
        'status',
        'trending',
        'image',
    ];
}
