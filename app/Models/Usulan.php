<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anggota;

class Usulan extends Model
{
    use HasFactory;

    protected $table = 'usulan';

    protected $fillable = [
        'anggota_id',
        'judul',
        'isi',
        'confirm_opw',
        'confirm_opd',
        'confirm_admin',
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'anggota_id');
    }
}
