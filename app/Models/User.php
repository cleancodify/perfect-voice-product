<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'role',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Define the relationship with Profile
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function voiceSpecials()
    {
        return $this->belongsToMany(VoiceSpecial::class, 'user_voice_special')
                    ->withTimestamps();
    }

    public function hasMinimumVoiceSpecials()
    {
        return $this->voiceSpecials()->count() >= 3;
    }

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class, 'user_id')
                    ->with(['contactUser.profile', 'project.attachments']);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class, 'user_id');
    }
}
