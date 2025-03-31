<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    // The table associated with the model (optional, Laravel assumes 'profiles' by default)
    protected $table = 'profiles';

    // The attributes that are mass assignable
    protected $fillable = [
        'country_code',
        'gender',
        'language_code',
        'photo_src',
        'bio',
        'worked_brands',
        'audio_src_explainer',
        'audio_src_elearning',
        'audio_src_guide',
        'audio_src_telephony',
        'audio_src_commercial',
        'audio_src_characters',
        'video_src',
        'deadline',
        'accept_demo',
        'company_name',
        'company_website',
        'address',
        'billing_address',
        'city',
        'state',
        'zip',
        'average_score',
        'price'
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'accept_demo' => 'boolean',
        'deadline' => 'integer',
    ];

    protected $with = ['language', 'country'];

    // Define the inverse of the relationship with User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with Language (using language_code as foreign key)
    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'language_code', 'code');
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_code', 'code');
    }
}
