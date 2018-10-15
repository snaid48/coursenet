<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    // if table name not plural
    protected $table = 'departemen';
    // whitelist
    protected $fillable = ['nama_departemen']; 
    // blacklist
    protected $guarded = ['id'];
    // created_at & updated_at tidak terpakai 
    public $timestamps = false; 
}
