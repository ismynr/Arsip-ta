<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sekolah;

class JenjangPendidikan extends Model
{
    use HasFactory;

    protected $table = "jenjang_pendidikan";

    protected $fillable = [
        'jenjang'
    ];

    public function sekolah()
    {
        return $this->hasMany(Sekolah::class, 'jenjang_id');
    }
}
