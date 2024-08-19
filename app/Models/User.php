<?php

namespace App\Models;

use App\Notifications\Auth\SendResetPasswordEmail;
use App\Notifications\Auth\SendVerificationEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @mixin Builder
 * @method static where(string $string, string|null $getEmail)
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasUlids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'gender',
        'role',
        'phone',
        'created_from',
        'avatar',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function settings() : HasMany
    {
        return $this->hasMany(Setting::class);
    }

    public function sendEmailVerificationNotification() : void
    {
        $this->notify(new SendVerificationEmail);
    }

    public function sendPasswordResetNotification($token) : void
    {
        $this->notify(new SendResetPasswordEmail($token));
    }

    public function markPhoneAsVerified() : bool
    {
        return $this->forceFill([
            "phone_verified_at" => $this->freshTimestamp()
        ])->save();
    }
}
