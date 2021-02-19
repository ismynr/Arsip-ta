<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SuratKeluar;

class KirimanSuratAdmin extends Model
{
    use HasFactory;

    protected $table = 'kiriman_surat_admin';

    protected $fillable = [
        'keterangan',
        'tujuan_opw',
        'tujuan_opd',
        'tujuan_anggota',
        'surat_keluar_id'
    ];

    public function suratKeluar()
    {
        return $this->belongsTo(SuratKeluar::class, 'surat_keluar_id');
    }
}
