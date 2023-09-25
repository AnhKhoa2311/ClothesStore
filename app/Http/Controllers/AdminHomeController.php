<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index() {
        $viewData = [];
        $viewData["title"] = "Admin Page - Admin - Online Store ";
        return view('admin.home.index')->with("viewData", $viewData);
    }
    public function delete($id) {
        Product::destroy($id);
        return back();
    }
}
