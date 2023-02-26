<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlaPm extends Model
{
    use HasFactory;
    protected $table = 'sla_pm';
    protected $fillable = [
        'name',
        'desc',
        'is_active',
        'updated_by',
    ];
}
