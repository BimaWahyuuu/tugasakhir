<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bidang;

class Waka extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];

    public function bidang(){
        return $this->hasMany(Bidang::class, 'waka_id', 'id');
    }
    

    protected $table = 'waka';
}
