<?php

namespace App;

use App\Bank;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}