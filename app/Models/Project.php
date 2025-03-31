<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'actor_id', 'name', 'description', 'medium', 'amount_words', 'deadline', 'instruction', 'tone_voice', 'user_id'
    ];

    public function actor()
    {
        return $this->belongsTo(User::class, 'actor_id');
    }

    public function attachments()
    {
        return $this->hasMany(AttachmentFile::class);
    }
}


