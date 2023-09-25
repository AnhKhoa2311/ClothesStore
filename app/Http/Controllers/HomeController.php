<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index() {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        $viewData['products'] = Product::all();
        return view("home.index")->with("viewData", $viewData);
    }
    public function index2() {
        $viewData = [];
        $viewData["title"] = "Welcome Page - Online Store";
        return view("home.index2") -> with("viewData", $viewData);
    }
    public function about()
{
    $viewData = [];
    $viewData["title"] = "About us - Online Store";
    $viewData["subtitle"] = "About us";
    $viewData["description"] = "This is an about page";
    $viewData["author"] = "Developed by: Nguyễn Vũ Anh Khoa";
    return view('home.about')->with("viewData", $viewData);
}

}
