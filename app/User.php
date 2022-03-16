<?php

namespace App;

use App\Bank;
use App\Branch;
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
        'name', 'email', 'password',
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

    public function banks()
    {
        return $this->belongsToMany(Bank::class, 'bank_user', 'bank_id', 'user_id');
        // return $this->belongsToMany(Bank::class, 'bank_user', 'bank_id', 'user_id')->withpivot('acc_number', 'branch_name');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}