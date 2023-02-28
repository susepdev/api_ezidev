<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartStatus extends Model
{
    use HasFactory;
    protected $table = 'part_status';
    protected $fillable = [
        'name',
        'desc',
        'is_active',
        'updated_by',
    ];
}
