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

}
