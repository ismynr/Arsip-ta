<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WilayahKabupaten;
use App\Models\TingkatOperator;
use App\Models\Anggota;
use App\Models\Sekolah;

class WilayahProvinsi extends Model
{
    use HasFactory;

    protected $table = "wilayah_provinsi";

    protected $fillable = [
        'nama'
    ];

    public function kabupaten()
    {
        return $this->hasMany(WilayahKabupaten::class, 'provinsi_id');
    }

    public function tingkatOperator()
    {
        return $this->hasOne(TingkatOperator::class, 'provinsi_id');
    }

    public function anggota()
    {
        return $this->hasMany(Anggota::class, 'provinsi_id');
    }
    public function sekolah()
    {
        return $this->hasMany(Sekolah::class, 'provinsi_id');
    }
}
