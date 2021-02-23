<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductVariantPrice;

class ProductVariant extends Model
{
    public function productVariantPrice()
    {
        return $this->hasOne(productVariantPrice::class, 'product_variant_one', 'id');
    }

    public function variants()
    {
        return $this->hasMany(Variant::class);
}
public function product()
    {
        return $this->belongsTo(Product::class);
}


}
