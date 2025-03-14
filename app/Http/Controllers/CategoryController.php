<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{ 
    private $category;
    private $product;

    public function __construct (Category $category,Product $product) {     
        $this->category = $category;   
        $this->product = $product;
    }
    public function index ($lug,$categoryId) {
        $categoryLimits = $this->category->where('parent_id',0)->take(4)->get();
        $products = $this->product->where('category_id',$categoryId)->paginate(12);
        $categoryParents = $this->category->where('parent_id',0)->get();
        return view('product.category.list',compact('categoryLimits','products','categoryParents'));
    }
}
