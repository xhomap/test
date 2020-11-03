<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    const CZECH_ID = 57;

    protected $fillable = [
        'code', 'name', 'phoneCode'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'countryCodePhoneId');
    }
}
