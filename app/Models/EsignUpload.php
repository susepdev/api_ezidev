<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EsignUpload extends Model
{
    use HasFactory;
    protected $table = 'esign_upload';
    protected $fillable = [
        'so_ticket_no',
        'e_sign_image',
        'updated_by'
    ];
}
