<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Severity extends Model
{
    use HasFactory;
    protected $table = 'severity';
    protected $fillable = [
        'name', 
        'desc', 
        'is_active', 
        'updated_by'
    ];
}
