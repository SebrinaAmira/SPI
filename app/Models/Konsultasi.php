<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;
    protected $table = 'konsultasi';
    protected $fillable = ['nama', 'alamat', 'status', 'telepon', 'pesan', 'created_by', 'updated_by'];
}
