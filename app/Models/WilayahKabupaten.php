<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WilayahProvinsi;
use App\Models\WilayahKecamatan;
use App\Models\TingkatOperator;
use App\Models\Anggota;
use App\Models\Sekolah;

class WilayahKabupaten extends Model
{
    use HasFactory;

    protected $table = "wilayah_kabupaten";

    protected $fillable = [
        'provinsi_id',
        'nama'
    ];

    public function provinsi()
    {
        return $this->belongsTo(WilayahProvinsi::class, 'provinsi_id');
    }

    public function kecamatan()
    {
        return $this->hasMany(WilayahKecamatan::class, 'kabupaten_id');
    }

    public function tingkatOperator()
    {
        return $this->hasOne(TingkatOperator::class, 'kabupaten_id');
    }

    public function anggota()
    {
        return $this->hasMany(Anggota::class, 'kabupaten_id');
    }

    public function sekolah()
    {
        return $this->hasMany(Sekolah::class, 'kabupaten_id');
    }
}
