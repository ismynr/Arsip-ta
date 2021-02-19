<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    use HasFactory;
    
    protected $table = "role";
    
    /**
     * Admin, 
     * Operator Daerah, 
     * Operator Wilayah, 
     * Anggota
     * 
     */
    protected $fillable = [
        'role_name',
    ];

    /**
     * Eloquent
     * 
     */
    public function user()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
