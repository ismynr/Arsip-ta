<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\OperatorW;

class OperatorD extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'operator_w_id',
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
        return $this->belongsTo(OperatorW::class, 'operator_w_id');
    }

}
