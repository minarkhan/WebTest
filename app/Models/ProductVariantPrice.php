<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Variant;

class ProductVariantPrice extends Model
{
    public function variants(){
        return $this->belongsToMany(Variant::class, 'variant_id');
    }
}
