<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class OrderProductsResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //dd($this);
        return [
            "ProductName"=>$this->ProductName,
            "UnitPrice"=>$this->UnitPrice,
            "SalePrice"=>$this->pivot->UnitPrice,
            "Quantity"=>$this->pivot->Quantity,
            "Discount"=>$this->pivot->Discount,
            ];
        //return parent::toArray($request);
    }


}
