<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    public $fillable = ['nama','nik','jk','tempat_lahir','tgl_lahir','agama','status_kawin','email','no_hp','alamat',
'rt','rw','kelurahan','kecamatan','provinsi','kota/kab','kode_pos','kewarganegraan','ukuran_almamater','foto','up_ktp','vaksin',
'nama_ibu','nama_ayah','alamat_ortu','kelurahan_ortu','kecamatan_ortu','provinsi_ortu','kota/kab','no_hp','peerjaan_ibu','peerjaan_ayah'];
}
