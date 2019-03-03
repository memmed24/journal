<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
        'password', 'title',
        'mid_name', 'surname',
        'username', 'degree',
        'nickname', 'primary_phone',
        'secondary_phone', 'secondary_phone_aim',
        'fax', 'prefered_contact_method',
        'position', 'insitution',
        'department', 'street_adress',
        'city', 'province',
        'zip', 'country',
        'address_for', 'reviewer',
        'confirmed', 'online',
        'role', 'active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function documents() {
        return $this->hasMany(Document::class);
    }

}
