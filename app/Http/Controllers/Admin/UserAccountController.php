<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    public function index() {
        $viewData = [];
        $viewData['title'] = "User's Account Information";
        $users = User::all() -> where('role', 'client');
        $viewData['users'] = $users;
        return view("admin.user.index") -> with("viewData", $viewData);
    }
    public function delete($id) {
        User::destroy($id);
        return redirect() -> back();
    }
}
