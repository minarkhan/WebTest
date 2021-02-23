<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public function ProductVariantPrice(){
        return $this->belongsToMany(ProductVariantPrice::class, 'variant_id');
    }

    public function productVariant()
    {
        return $this->belongsTo(ProductVariant::class);
    }

}
