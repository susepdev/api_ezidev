<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlaResolve extends Model
{
    use HasFactory;
    protected $table = 'sla_resolve';
    protected $fillable = [
        'name',
        'desc',
        'is_active',
        'updated_by',
    ];
}
