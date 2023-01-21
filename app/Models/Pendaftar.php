<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;
    public $fillable = ['nama','email','no_hp','tgl_lahir','kampus','prodi','kelas','status','rekomendasi','id_prodi']; 
    public function Prodi(){
        return $this->hasMany(Prodi::class, 'id_prodi');
    }
    
}
