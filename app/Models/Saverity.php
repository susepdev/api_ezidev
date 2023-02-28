<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saverity extends Model
{
    use HasFactory;
    protected $table = 'saverity';
    protected $fillable = [
        'name', 
        'desc', 
        'is_active', 
        'updated_by'
    ];
}