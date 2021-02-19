<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JenjangPendidikan;
use App\Models\WilayahKecamatan;
use App\Models\WilayahKabupaten;
use App\Models\WilayahProvinsi;
use App\Models\Anggota;

class Sekolah extends Model
{
    use HasFactory;

    protected $table = "sekolah";

    protected $fillable = [
        'npsn', 
        'nama_sekolah',
        'status_sekolah',
        'jenjang_id',
        'notelp',
        'alamat',
        'kecamatan_id',
        'kabupaten_id',
        'provinsi_id'
    ];

    public function jenjang()
    {
        return $this->belongsTo(JenjangPendidikan::class, 'jenjang_id');
    }

    public function kecamatan()
    {
        return $this->belongsTo(WilayahKecamatan::class, 'kecamatan_id');
    }

    public function kabupaten()
    {
        return $this->belongsTo(WilayahKabupaten::class, 'kabupaten_id');
    }

    public function provinsi()
    {
        return $this->BelongsTo(WilayahProvinsi::class, 'provinsi_id');
    }

    public function anggota()
    {
        return $this->hasMany(Anggota::class, 'sekolah_id');
    }
}
