<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto',
        'judul',
        'kategori_id',
        'penerbit_id',
        'pengarang',
        'tahun_terbit',
        'isbn',
        'j_buku_baik',
        'j_buku_rusak'
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
    public function penerbit(){
        return $this->belongsTo(Penerbit::class);
    }
    public function peminjaman(){
        return $this->belongsTo(Peminjaman::class);
    }
}