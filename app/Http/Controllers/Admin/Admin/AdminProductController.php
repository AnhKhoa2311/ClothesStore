<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    
    public function store(Request $request) {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "price" => "required|numeric|gt:0",
            "image" => "image",
        ]);
        // $newProduct = new Product();
        // $newProduct->setName($request->input('name'));
        // $newProduct->setDescription($request->input('description'));
        // $newProduct->setPrice($request->input('price'));
        // $newProduct->setImage("game.png");
        // $newProduct->save();
        $creationData = $request->only(["name", "description", "price"]);
        $creationData["image"] = "game.png";
        Product::created($creationData);
        return back();
    }
}
