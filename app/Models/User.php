<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 *
 * @method bool isConseiller()
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'image',
        'field',
        'company_name',
        'position',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function roles(): belongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function quizes(): HasMany
    {
        return $this->hasMany(Quiz::class, 'quiz_id');
    }

    public function hasRole($role): bool
    {
        return $this->roles()->where('name', $role)->exists();
    }
    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }
    public function isConseiller(): bool
    {
        return $this->hasRole('conseiller');
    }

    public function getInitialsAttribute(): String
    {
        return $this->name ? collect(explode(' ', $this->name))->map(function ($name) {
            return strtoupper(substr($name, 0, 1));
        })->implode('') : '';
    }
}
