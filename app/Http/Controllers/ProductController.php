<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Http\Resources\MainProduct as MainProductResource;
use App\Http\Resources\Product as ProductResource;
use App\Http\Resources\Category as CategoryResorce;
use App\Http\Resources\ItemType as ItemTypeResorce;
use App\Product;
use App\Category;
use App\ItemType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getProducts(){
        $products = Product::all();
        return MainProductResource::collection($products);
    }
    public function getProductById($id){
        $product = Product::find($id);
        return new ProductResource($product);
    }
    public function getCategories(){
        $categories = Category::all();
        return CategoryResorce::collection($categories);
    }
    public function getItemTypes(){
        $categories = ItemType::all();
        return ItemTypeResorce::collection($categories);
    }
    public function store(Request $request){
        $name = $request->name;
        $phone = $request->phone;
        $comment = $request->comment;
        $feedback = new Feedback;
        $feedback->name = $name;
        $feedback->phone = $phone;
        $feedback->comment = $comment;
        $feedback->save();
        return "Successful!!!";
    }
    public function addlike($id){
        $product = Product::find($id);
        $like = $product->like;
        $product->like = $like+1;
        $product->save();
        return 'Successful!!!';
    }

}
