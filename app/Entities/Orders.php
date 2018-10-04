<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
class Orders extends Model
{
    protected $primaryKey = "OrderID";

    protected $orderDetails;
    /**
     * Get the comments for the blog post.
     */
    public function orderDetails()
    {
        return $this->hasMany('App\Entities\OrderDetails','OrderID');
        //return $this->belongsToMany('App\Entities\Products', 'Order Details','OrderID','ProductID');
    }

    public function orderProducts()
    {
        // return $this->hasMany('App\Entities\OrderDetails','OrderID');
        return $this->belongsToMany(
            'App\Entities\Products',
            'Order Details',
            'OrderID',
            'ProductID')
            ->withPivot('UnitPrice','Quantity','Discount');
    }
}
