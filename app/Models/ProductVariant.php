<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Variant;

class ProductVariant extends Model
{
    protected $fillable = [
      'variant',
      'product_id',
      'variant_id'
    ];
}
