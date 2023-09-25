<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request) {
        $total = 0;
        $productInCart = [];
        $productInSession = $request -> session() -> get("products");
        if($productInSession) { 
            $productInCart = Product::findMany(array_keys($productInSession));
            $total = Product::sumPricesByQuantity($productInCart, $productInSession);
        }
        $viewData = [];
        $viewData['session'] = $productInSession;
        $viewData["title"] = "Cart - Online Store";
        $viewData["subtitle"] = "Shopping Cart";
        $viewData["total"] = $total;
        $viewData["products"] = $productInCart;
        return view("cart.index") -> with("viewData", $viewData);
    }
    public function add(Request $request, $id) {
        $products = $request -> session() -> get("products");
        $products[$id] = $request -> input("quantity");
        $request -> session() -> put("products", $products);
        return redirect() -> route("cart.index");
    }
    public function delete(Request $request) {
        $request -> session() -> forget("products");
        return back();
    }
    public function purchase(Request $request) {
        $productInSession = $request -> session() -> get("products");
        if($productInSession) {
            $userId = Auth::user() -> getId();
            $order = new Order();
            $order -> setUserId($userId);
            $order -> setTotal(0);
            $order -> save();

            $total = 0;
            $productInCart = Product::findMany(array_keys($productInSession));
            foreach($productInCart as $product) {
                $quantity = $productInSession[$product->getId()];
                $item = new Item();
                $item -> setQuantity($quantity);
                $item -> setPrice($product->getPrice());
                $item -> setProductId($product -> getId());
                $item -> setOrderId($order -> getId());
                $item -> save();
                $total += ($product -> getPrice() * $quantity);
            }
            $order -> setTotal($total);
            $order -> save();

            $newBalance = Auth::user() -> getBalance() - $total;
            Auth::user() -> setBalance($newBalance);
            Auth::user() -> save();
            $request -> session() -> forget("products");

            $viewData = [];
            $viewData["title"] = "Purchase - Online Store";
            $viewData["subtitle"] = "Purchase Status";
            $viewData["order"] = $order;
            return view('cart.purchase') -> with("viewData", $viewData);
        } else {
            return redirect() -> route('cart.index');
        }
    }
}
