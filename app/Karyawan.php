<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    // if table name not plural
    protected $table = 'karyawan';

    // whitelist untuk memperbolehkan apa saja yang boleh di proses
    protected $fillable = ['nama_karyawan','alamat','telepon','jabatan'];

    // memblacklist field tertentu dengan menyebutkan namanya
    protected $guarded = ['id'];
    // created_at dan updated_at menjadi tidak bisa digunakan
    public $timestamps = false; 
    
}
