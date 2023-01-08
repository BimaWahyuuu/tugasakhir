<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tanggapan;
use App\Models\Bidang;
class Saran extends Model
{
    use HasFactory;

    protected $guarded = [
        'id', 'dibuat'
    ];

    public function tanggapan(){
        return $this->hasMany(Tanggapan::class, 'saran_id','id');
    }
    public function bidang(){
        return $this->belongsTo(Bidang::class, 'id');
    }

    protected $table = 'saran';
}
