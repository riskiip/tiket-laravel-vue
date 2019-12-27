<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoriResource extends JsonResource
{
    public function toArray($request)
    {
        return 
        [
            'id'=>$this->id,
            'name_categori'=>$this->name_categori,
        ];
    }
}
