<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
   protected $primaryKey="SupplierID";
   protected $table="Suppliers";

    protected $products;
    /**
     * Get the comments for the blog post.
     */
    public function products()
    {
        return $this->hasMany('App\Entities\Products','SupplierID');
    }
}
