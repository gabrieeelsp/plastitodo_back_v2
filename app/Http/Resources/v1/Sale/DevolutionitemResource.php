<?php

namespace App\Http\Resources\v1\Sale;

use Illuminate\Http\Resources\Json\JsonResource;

class DevolutionitemResource extends JsonResource
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
            'type' => 'devolutionitems',
            'attributes' => [
                'cantidad' => $this->cantidad,
                'precio' => $this->saleitem->precio,
                'saleitem_id' => $this->saleitem_id,
                'is_stock_unitario_kilo' => $this->saleitem->saleproduct->stockproduct->is_stock_unitario_kilo,
                //'stock_aproximado_unidad' => $this->saleitem->saleproduct->stockproduct->stock_aproximado_unidad,
                'cantidad_total' => $this->cantidad_total,
                'name' => $this->saleitem->saleproduct->name
            ]
        ]; 
        //return parent::toArray($request);
    }
}
