<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctor';
    protected $fillable = [
        'doc_id',
        'name',
        'speciality',
        'phone',
        'schedule',
        'hour',
        'Room',
        'degree',
        'institution',
        'status',
        'trending',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'doc_id', 'id');
    }
}
