<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileOrganisasi extends Model
{
    use HasFactory;

    protected $table = 'profile_organisasi';

    protected $fillable = [
        'judul',
        'gambar_path',
        'isi'
    ];
}
