<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PmCode extends Model
{
    use HasFactory;
    protected $table = 'pm_code';
    protected $fillable = [
        'name',
        'desc',
        'is_active',
        'updated_by',
    ];
}
