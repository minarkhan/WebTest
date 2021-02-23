<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'sku', 'description'
    ];

    public function ProductVariantPrices(){
        return $this->hasMany(ProductVariantPrice::class);

    }

    public function productImage()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function ProductVariant()
    {
        return $this->hasMany(ProductVariant::class);
    }

}
