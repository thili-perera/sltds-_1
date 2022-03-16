<?php

namespace App;

use App\Branch;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public function branches()
    {
        return $this->hasMany(Branch::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'bank_user', 'user_id', 'bank_id')->withpivot('acc_number', 'branch_name');
    }
}