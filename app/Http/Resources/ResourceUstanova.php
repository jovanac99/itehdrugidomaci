<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResourceUstanova extends JsonResource
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
            'Naziv -> ' => $this->resource->naziv_ustanove,
            'Adresa -> ' => $this->resource->adresa,
            'Grad -> ' => $this->resource->grad,
            'Broj zaposlenih -> ' => $this->resource->broj_zaposlenih,
            'Website -> ' => $this->resource->website
        ];
    }
}
