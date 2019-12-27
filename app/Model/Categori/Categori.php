<?php

namespace App\Model\Categori;

use Illuminate\Database\Eloquent\Model;
use App\Model\Tiket\Tiket;

class Categori extends Model
{
    protected $fillable=['name_categori'];

    public function tiket()
    {
        return $this->hasMany(Tiket::class, 'id_kategori', 'id');
    }
}
