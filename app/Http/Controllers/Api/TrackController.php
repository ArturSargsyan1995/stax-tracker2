<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api\Product;
use App\Models\Api\Variant;


class TrackController extends Controller
{
    public function trackView(Product $product){
        dd($product);
    }
    public function trackClick(Product $product, Variant $variant){
        dd($product);
    }
}
