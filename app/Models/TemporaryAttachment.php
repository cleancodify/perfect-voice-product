<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'file_name',
        'file_path',
        'mime_type',
        'file_size'
    ];

    /**
     * Get the user who uploaded the temporary file.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
