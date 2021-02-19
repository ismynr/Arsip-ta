<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WilayahProvinsi;
use App\Models\WilayahKabupaten;
use App\Models\Operator;

class TingkatOperator extends Model
{
    use HasFactory;

    protected $table = "tingkat_operator";

    protected $fillable = [
        'provinsi_id',
        'kabupaten_id',
        'operator_id'
    ];

    public function provinsi()
    {
        return $this->belongsTo(WilayahProvinsi::class, 'provinsi_id');
    }

    public function kabupaten()
    {
        return $this->belongsTo(WilayahKabupaten::class, 'kabupaten_id');
    }

    public function operator()
    {
        return $this->belongsTo(Operator::class, 'operator_id');
    }
}
