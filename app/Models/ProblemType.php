<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProblemType extends Model
{
    use HasFactory;
    protected $table = 'problem_type';
    protected $fillable = [
        'name',
        'desc',
        'is_active',
        'updated_by',
    ];
}
