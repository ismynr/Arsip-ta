<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KirimanSuratAdmin;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $table = 'surat_keluar';

    protected $fillable = [
        'no_surat',
        'kepada',
        'tgl_surat',
        'perihal',
        'lampiran'
    ];

    public function kirimanSuratAdmin()
    {
        return $this->hasMany(KirimanSuratAdmin::class, 'surat_keluar_id');
    }
}
