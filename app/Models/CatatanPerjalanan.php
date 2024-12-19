<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanPerjalanan extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dengan nama model (dalam hal ini, jika tabelnya bukan 'catatan_perjalanans')
    protected $table = 'catatan_perjalanan';

    // Tentukan atribut yang bisa diisi
    protected $fillable = ['nik', 'tanggal', 'waktu', 'lokasi', 'suhu'];
}
