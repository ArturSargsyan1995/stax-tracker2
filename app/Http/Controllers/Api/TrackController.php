<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function trackView($id){
        print_r($id);
    }
    public function trackClick($product_id, $variant_id){
        print_r($product_id . '/');

        print_r($variant_id);
    }
}
