<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\OperatorW;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
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

    public function operator_w()
    {
        return $this->hasMany(OperatorW::class, 'admin_id');
    }
}
