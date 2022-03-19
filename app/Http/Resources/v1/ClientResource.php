<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
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
            'id' => $this->id,
            'type' => 'clients',
            'attributes' => [
                'name' => $this->name,
                'tipo' => $this->tipo,
                'saldo' => $this->saldo
            ]
        ]; 
        //return parent::toArray($request);
    }
}
