<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Operator;

class KirimanSuratOperator extends Model
{
    use HasFactory;

    protected $table = 'kiriman_surat_admin';
    
    protected $fillable = [
        'operator_id',
        'keterangan',
        'no_surat',
        'tgl_surat',
        'perihal',
        'lampiran'
    ];

    public function operator()
    {
        return $this->belongsTo(Operator::class, 'operator_id');
    }
}
