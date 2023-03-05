<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartLocation extends Model
{
    use HasFactory;
    protected $table = 'part_location';
    protected $fillable = [
        'name',
        'desc',
        'user_id',
        'is_active',
        'updated_by'
    ];
}
