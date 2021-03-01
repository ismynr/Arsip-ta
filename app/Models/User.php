<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;
use App\Models\Admin;
use App\Models\Operator;
use App\Models\Anggota;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Eloquent
     * 
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'user_id');
    }

    public function operator()
    {
        return $this->hasOne(Operator::class, 'user_id');
    }

    public function anggota()
    {
        return $this->hasOne(Anggota::class, 'user_id');
    }

    public function hasRole($role)
    {
      if ($this->role()->where('role_name', $role)->first()) {
        return true;
      }
      return false;
    }
}
