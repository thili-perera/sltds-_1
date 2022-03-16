<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank_User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bank_user';

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}