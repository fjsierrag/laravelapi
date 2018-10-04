<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class CustomersResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $arr=[
           "CustomerID"=>$this->CustomerID
        ];
       return $arr;
    }

}
