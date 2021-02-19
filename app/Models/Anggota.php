<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\WilayahKecamatan;
use App\Models\WilayahKabupaten;
use App\Models\WilayahProvinsi;
use App\Models\StatusGuru;
use App\Models\Bank;
use App\Models\Sekolah;
use App\Models\Usulan;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';

    protected $fillable = [
        'user_id',
        'no_anggota',
        'nik',
        'nuptk',
        'nama',
        'gelar',
        'jk',
        'agama',
        'tempat_lahir',
        'tgl_lahir',
        'nohp',
        'rt_rw',
        'desa',
        'kecamatan_id',
        'kabupaten_id',
        'provinsi_id',
        'status_id',
        'penghasilan_bln',
        'jabatan',
        'bank_id',
        'cabang_bank',
        'nama_rekening',
        'norek',
        'ktp_path',
        'ijasah_path',
        'photo_path',
        'sekolah_id',
        'operator_sekolah'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
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

    public function statusGuru()
    {
        return $this->belongsTo(StatusGuru::class, 'status_id');
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id');
    }

    public function usulan()
    {
        return $this->hasMany(Usulan::class, 'anggota_id');
    }

}
