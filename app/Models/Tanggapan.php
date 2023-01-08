<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;
use app\Models\Saran;


class Tanggapan extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];

    public function waka(){
        return $this->belongsTo(User::class, 'id');
    }
    public function saran(){
        return $this->belongsTo(Saran::class, 'id');
    }
    protected $table = 'tanggapan';
}
