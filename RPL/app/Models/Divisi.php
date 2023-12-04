<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_divisi',
        'status',
        'created_by',
        'modified_by',
        'organisasi_id',        
    ];

    public function organisasis(){
        return $this->hasMany(Organisasi::class);
    }

    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }
}
