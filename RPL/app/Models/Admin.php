<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable=[
        'Nama',
        'Jabatan',
        'Nohp',
        'Kelamin',
        'Username',
        'Password',
        'Status',
    ];
}
