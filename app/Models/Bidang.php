<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Saran;

class Bidang extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];

    public function waka(){
        return $this->belongsTo(Waka::class, 'id');
    }
    public function saran(){
        return $this->belongsTo(Saran::class, 'id');
    }

    protected $table = 'bidang';
}
