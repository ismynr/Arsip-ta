<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\TingkatOperator;
use App\Models\KirimanSuratOperator;

class Operator extends Model
{
    use HasFactory;

    protected $table = "operator";

    protected $fillable = [
        'user_id',
        'name',
    ];

    /**
     * Eloquent
     * 
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tingkatOperator()
    {
        return $this->hasOne(TingkatOperator::class, 'operator_id');
    }

    public function kirimanSuratOperator()
    {
        return $this->hasMany(KirimanSuratOperator::class, 'operator_id');
    }
}
