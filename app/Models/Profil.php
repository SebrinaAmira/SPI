<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profil';
    protected $fillable = ['alamat', 'fb', 'instagram', 'telepon', 'deskripsi_konten', 'status', 'created_by', 'updated_by'];
}
