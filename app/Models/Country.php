<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function students()
    {
        return $this->hasMany(Students::class);
    }
}