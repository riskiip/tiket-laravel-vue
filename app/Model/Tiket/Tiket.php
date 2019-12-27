<?php

namespace App\Model\Tiket;

use Illuminate\Database\Eloquent\Model;
use App\Model\Categori\Categori;
use App\Model\Transaksi\Transaksi;

class Tiket extends Model
{
    protected $fillable = ['id_kategori', 'name_tiket', 'harga_tiket', 'jenis_tiket', 'jumlah_tiket'];

    public function categori()
    {
        return $this->belongsTo(Categori::class, 'id_kategori', 'id');
    }  

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_tiket', 'id');
    }
}
