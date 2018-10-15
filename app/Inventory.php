<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    // if table name not plural
    protected $table = 'inventory';

    // whitelist untuk memperbolehkan apa saja yang boleh di proses
    // protected $fillable = ['nama_inventory'];

    // memblacklist field tertentu dengan menyebutkan namanya
    protected $guarded = ['id'];
    // created_at dan updated_at menjadi tidak bisa digunakan
    public $timestamps = false; 
}
