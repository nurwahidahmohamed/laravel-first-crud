<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    //
    Use HasFactory;

    //define relationship dengan user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //getter make sure title uppercase
    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }

    //setter make sure user insert semua UPPER CASE
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }

}
