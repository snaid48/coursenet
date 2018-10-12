<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    // if table name not plural
    protected $table = 'jabatan';

    // whitelist untuk memperbolehkan apa saja yang boleh di proses
    protected $fillable = ['nama_jabatan'];

    // memblacklist field tertentu dengan menyebutkan namanya
    protected $guarded = ['id'];
    // created_at dan updated_at menjadi tidak bisa digunakan
    public $timestamps = false; 
}
