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
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable implements MustVerifyEmail
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

    protected $dates = [
        'created_at',
        'updated_at',
        'logged_at',
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
    
    /**
     * Role Checker
     * 
     */
    public function myRole()
    {
        return $this->role->role_name;
    }

    public function hasRole($role)
    {
      if ($this->role()->where('role_name', $role)->first()) {
        return true;
      }
      return false;
    }

    public function myName()
    {
        if($this->hasRole('Admin')){
            return Auth::user()->admin->name;

        }else if($this->hasRole('OperatorWilayah') || ($this->hasRole('OperatorDaerah'))){
            return Auth::user()->operator->name;

        }else if($this->hasRole('Anggota')){
            return Auth::user()->anggota->nama;

        }
    }
}
