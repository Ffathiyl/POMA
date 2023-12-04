<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; 

class Pengurus extends Authenticatable
{
    protected $primaryKey = 'Nim';
    public $incrementing = false;
    use HasFactory;
    protected $fillable = [
        'Nim',
        'Nama',
        'organisasi_id',
        'Password',
        'Status',
        'modified_by',
    ];

    public function organisasi(){
        return $this->belongsTo(Organisasi::class);
    }
}
