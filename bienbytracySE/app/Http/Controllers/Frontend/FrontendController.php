<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index() : View {
        $sliders = Slider::where('status', 1)->get();
        $categories = Category::where(['show_at_home' => 1, 'status' => 1])->get();
        return view('frontend.home.index',
        compact(
        'sliders',
        'categories'
    ));
}


public function product(Request $request): View
{
    $query = Product::where('status', 1)->orderBy('id', 'DESC');

    if ($request->has('search') && $request->filled('search')) {
        $searchTerm = $request->input('search');
        $query->where(function ($query) use ($searchTerm) {
            $query->where('name', 'like', '%' . $searchTerm . '%')
                ->orWhere('long_description', 'like', '%' . $searchTerm . '%');
        });
    }

    if ($request->has('category') && $request->filled('category')) {
        $categorySlug = $request->input('category');
        $query->whereHas('category', function ($query) use ($categorySlug) {
            $query->where('slug', $categorySlug);
        });
    }

    $products = $query->paginate(12);
    $categories = Category::where('status', 1)->get();

    return view('frontend.pages.product', compact('products', 'categories'));
}



    function showProduct(string $slug): View {
        $product = Product::with(['productImages', 'productIcing', 'productOption'])->where( ['slug' => $slug, 'status'=>1])->firstOrFail();
        $relatedProducts = Product::where('category_id', $product->category_id)
        ->where('id','!=', $product->id)->take(8)->latest()->get();
        return view ('frontend.pages.product-view', compact('product', 'relatedProducts'));
    }
}

