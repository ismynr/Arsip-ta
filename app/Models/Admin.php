<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Admin extends Model
{
    use HasFactory;

    protected $table = "admin";

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
}
