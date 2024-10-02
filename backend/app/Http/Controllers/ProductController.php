<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Traits\ApiResponse;
use App\Serializers\ProductSerializer;

class ProductController extends Controller
{
    use ApiResponse;

    // GET api/products
    public function index()
    {
        $products = Product::all();

        return $this->formatResponse(
            __("products.response.get_success"),
           [ "products" => ProductSerializer::serializeCollection($products, "list")]
        );
    }
}
