<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SotFileUpload extends Model
{
    use HasFactory;
    protected $table = 'sot_fileupload';
    protected $fillable = [
        'so_ticket_no',
        'uploaded_file',
        'status_work',
        'updated_by'
    ];
}
