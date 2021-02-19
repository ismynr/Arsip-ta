<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AgendaKegiatan;

class NotulenAgenda extends Model
{
    use HasFactory;

    protected $table = 'notulen_agenda';

    protected $fillable = [
        'agenda_id',
        'pembahasan',
        'notulis',
        'kehadiran_path',
        'dokumentasi_path'
    ];

    public function agendaKegiatan()
    {
        return $this->belongsTo(AgendaKegiatan::class, 'agenda_id');
    }
}
