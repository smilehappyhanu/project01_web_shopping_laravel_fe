<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    private $slider;
    private $category;
    private $product;

    public function __construct (Slider $slider,Category $category,Product $product) {
        $this->slider = $slider;
        $this->category = $category;
        $this->product = $product;
    }
    public function index () {
        $sliders = $this->slider->where('deleted_at',NULL)->get();
        $categoryParents = $this->category->where('parent_id',0)->get();
        $products = $this->product->latest()->take(6)->get();
        $productsRecommend = $this->product->latest('view_count','desc')->take(12)->get();
        $categoryLimits = $this->category->where('parent_id',0)->take(4)->get();
        return view('home.home',compact('sliders','categoryParents','products','productsRecommend','categoryLimits'));
    }
}
