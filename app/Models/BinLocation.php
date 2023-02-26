<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinLocation extends Model
{
    use HasFactory;
    protected $table = 'bin_location';
    protected $fillable = [
        'name',
        'desc',
        'is_active',
        'updated_by',
    ];
}
