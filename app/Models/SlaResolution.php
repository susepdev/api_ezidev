<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlaResolution extends Model
{
    use HasFactory;
    protected $table = 'sla_resolution';
    protected $fillable = [
        'name',
        'desc',
        'is_active',
        'updated_by',
    ];
}
