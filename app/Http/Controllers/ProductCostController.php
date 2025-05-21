<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductCostController extends Controller
{
    public function index()
    {
        // Load products with their costs
        $products = Product::with('costs')->get();

        return view('product_costs', compact('products'));
    }
}
