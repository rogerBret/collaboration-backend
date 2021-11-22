<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return[

            'id' => $this->id,
            'serviceName' => $this->serviceName,
            'facturation' => $this->facturation,
            'price'=> $this->price,
            'id_app' => $this->id_app
        ];
    }
}