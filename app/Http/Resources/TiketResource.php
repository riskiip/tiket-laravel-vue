<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TiketResource extends JsonResource
{
    public function toArray($request)
    {
        return 
        [
            'id'=>$this->id,
           'name_tiket'=>$this->name_tiket,
           'harga_tiket'=>$this->harga_tiket,
           'jenis_tiket'=>$this->jenis_tiket,
           'name_kategori'=>$this->categori->name_categori,
           'jumlah_tiket'=>$this->jumlah_tiket,
           'id_kategori'=>$this->categori->id
           //'created_at'=>$this->created_at
        ];
    }
}
