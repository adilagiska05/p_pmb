<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    public $fillable = ['id_prodi','prodi'];  

    public function Pendaftar(){
        return $this->hasMany(Pendaftar::class, 'id_pendaftar');
    }
}
