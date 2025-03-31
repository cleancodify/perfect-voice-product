<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['user_id', 'contact_id', 'chat_id', 'project_id'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($contact) {
            $contact->chat_id = min($contact->user_id, $contact->contact_id) . '-' . max($contact->user_id, $contact->contact_id) . '-' . $contact->project_id;
        });
    }

    /**
     * Get the contact person.
     */
    public function contactUser()
    {
        return $this->belongsTo(User::class, 'contact_id');
    }

    /**
     * Get messages related to this contact via chat_id.
     */
    public function messages()
    {
        return $this->hasMany(Message::class, 'chat_id', 'chat_id')->orderBy('created_at', 'asc');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}

