<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NotulenAgenda;

class AgendaKegiatan extends Model
{
    use HasFactory;

    protected $table = 'agenda_kegiatan';

    protected $fillable = [
        'nama_kegiatan',
        'tempat',
        'tanggal_waktu',
        'keterangan'
    ];

    public function notulenAgenda()
    {
        return $this->hasOne(NotulenAgenda::class, 'agenda_id');
    }
}
