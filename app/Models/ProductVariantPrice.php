<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductVariant;

class ProductVariantPrice extends Model
{
    protected $fillable = [
        'product_variant_one',
        'product_variant_two',
        'product_variant_three',
        'price',
        'stock',
        'product_id',
    ];
    public function productVariantOne() {
        return $this->belongsTo(ProductVariant::class, 'product_variant_one');
    }

    public function productVariantTwo() {
        return $this->belongsTo(ProductVariant::class, 'product_variant_two');
    }

    public function productVariantThree() {
        return $this->belongsTo(ProductVariant::class, 'product_variant_three');
    }

}
