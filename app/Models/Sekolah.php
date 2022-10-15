<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;
    // protected $table = 'sekolah';
    // protected $primarykey = 'kategori_id';
    // protected $primarykey = 'id';
    // protected $fillable = ['namaSekolah']; //namaSekolah boleh diisi sisanya jangan
    // protected $table = 'admins'; <-- gak ngerubah gak dipakai prepare
    protected $guarded = ['id']; //id tidak boleh di isi dan berubah sisanya terserah

    public function admins()
    {
        return $this->hasMany(Admin::class);
    }
}
