<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anggota;

class Bank extends Model
{
    use HasFactory;

    protected $table = "bank";

    protected $fillable = [
        'nama_bank'
    ];

    public function anggota()
    {
        return $this->hasMany(Anggota::class, 'bank_id');
    }
}
