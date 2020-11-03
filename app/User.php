<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'countryCodePhoneId', 'phone', 'email', 'note'
    ];

    public function getNameAttribute()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getPhoneWithPrefixAttribute()
    {
        return '+' . $this->phoneCountry->phoneCode . ' ' . $this->phone;
    }

    public function phoneCountry()
    {
        return $this->belongsTo(Country::class, 'countryCodePhoneId');
    }

}
