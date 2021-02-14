<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Admin;
use App\Models\OperatorD;

class OperatorW extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'admin_id',
        'name',
    ];

    /**
     * Eloquent
     * 
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function operator_d()
    {
        return $this->hasMany(OperatorD::class, 'operator_w_id');
    }
}
