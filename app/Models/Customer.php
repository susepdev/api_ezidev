<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $fillable = [
        'alias',
        'name',
        'desc',
        'customer_type_id',
        'is_active',
        'adr',
        'prov',
        'pic',
        'pic_hp',
        'updated_by'
    ];

    public function customer_type(){
        return $this->belongsTo(CustomerType::class);
    }
}
