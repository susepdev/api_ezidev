<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PicVendor extends Model
{
    use HasFactory;
    protected $table = 'pic_vendor';
    protected $fillable = [
        'alias',
        'name',
        'no_hp',
        'is_active',
        'updated_by'
    ];
}
