<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSla extends Model
{
    use HasFactory;
    protected $table = 'data_sla';
    protected $fillable = [
        'name',
        'desc',
        'is_active',
        'updated_by',
    ];
}
