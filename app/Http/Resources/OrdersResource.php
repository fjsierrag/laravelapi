<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class OrdersResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $arr=parent::toArray($request);
        $arr['Order_Products'] = OrderProductsResource::collection($this->orderProducts);
       return $arr;
    }

}
