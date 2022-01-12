<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResourcePacijent extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID -> ' => $this->resource->id,
            'Ime -> ' => $this->resource->ime,
            'Prezime -> ' => $this->resource->prezime,
            'JMBG -> ' => $this->resource->jmbg,
            'Soba -> ' => $this->resource->soba,
            'Doktor -> ' => new ResourceDoktor($this->resource->doktor)
        ];
    }
}
