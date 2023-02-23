<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBase extends Model
{
    use HasFactory;
    protected $table = 'service_base';
    protected $fillable = [
        'name',
        'city',
        'updated_by'
    ];
}
