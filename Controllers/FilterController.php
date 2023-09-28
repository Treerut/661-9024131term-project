<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index(Request $request)
    {
        $brands = Brand::all();
        $categories = Category::all();
        $query = Product::query();

        if(isset($request->title) && ($request->title != null))
        {
            $query->where('name', $request->title);
        }

        if(isset($request->min) && ($request->min != null))
        {
            $query->where('price', '>=', $request->min);
        }

        if(isset($request->max) && ($request->max != null))
        {
            $query->where('price', '<=', $request->max);
        }

        if(isset($request->brand) && ($request->brand != null))
        {
            $query->whereHas('brand', function($q) use ($request) {
                $q->whereIn('id',$request->brand);
            });
        }

        if(isset($request->category) && ($request->category != null))
        {
            $query->whereHas('category', function($q) use ($request) {
                $q->whereIn('id',$request->category);
            });
        }

        $products = $query->get();
        return view('search', compact('products', 'brands', 'categories'));

    }
}
