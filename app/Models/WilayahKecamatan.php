<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WilayahKabupaten;
use App\Models\Anggota;
use App\Models\Sekolah;

class WilayahKecamatan extends Model
{
    use HasFactory;

    protected $table = "wilayah_kecamatan";

    protected $fillable = [
        'kabupaten_id',
        'nama'
    ];

    public function kabupaten()
    {
        return $this->belongsTo(WilayahKabupaten::class, 'kabupaten_id');
    }

    public function anggota()
    {
        return $this->hasMany(Anggota::class, 'kecamatan_id');
    }

    public function sekolah()
    {
        return $this->hasMany(Sekolah::class, 'kecamatan_id');
    }
}
