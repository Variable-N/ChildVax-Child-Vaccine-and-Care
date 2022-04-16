<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'father_nid', 'mother_nid', 'hospital_id', 'level', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get all of the children for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(Child::class);
    }

    /**
     * Get all of the hospitals for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
    /**
     * Get all of the appointments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appointments()
    {
        if($this->level == 0)
            return $this->hasMany(Appointment::class);
        else
            return $this->hospital()->appointments();
    }
}
