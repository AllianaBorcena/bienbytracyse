<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

    function showProduct(string $slug): View {
        return view ('frontend.pages.product-view');
    }
}

