<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    // GANTI ini ke nama tabel yang benar di database kamu
    protected $table = 'datas'; // contoh: kalau tabel kamu bernama 'datas'

    protected $fillable = [
        'KdPinjam', 'nama', 'judul', 'KdBuku', 'tglPinjam', 'tglKembali', 'status'
    ];
}
