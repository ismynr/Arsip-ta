<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anggota;

class StatusGuru extends Model
{
    use HasFactory;

    protected $table = "status_guru";

    protected $fillable = [
        'status'
    ];

    public function anggota()
    {
        return $this->hasMany(Anggota::class, 'status_id');
    }
}
