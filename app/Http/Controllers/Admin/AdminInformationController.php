<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminInformationController extends Controller
{
    public function index() {
        $viewData = [];
        $admins = User::all() -> where('role', 'admin');
        $viewData['title'] = "Admins Information";
        $viewData['admins'] = $admins;

        return view("admin.admin.index") -> with("viewData", $viewData);
    }
    public function create() {
        $viewData = [];
        $viewData['title'] = "Create Admins";

        return view("admin.admin.create") -> with("viewData", $viewData);
    }
    public function store(Request $request) {
        $request -> validate([
            "name" => "required|max:255",
            "email" => "required|email",
            "password" => "required|min:8",
            "role" => "required",
        ]);

        $newUser = new User();
        $newUser -> setName($request -> input('name'));
        $newUser -> setEmail($request -> input('email'));
        $newUser -> setPassword(bcrypt($request -> input('password')));
        $newUser -> setRole($request -> input('role'));

        $newUser -> save();

        return redirect() -> back();
    }
    public function edit($id) {
        $viewData = [];
        $adminFounds = User::findOrFail($id);
        $viewData['title'] = "Edit Admin #".$id;
        $viewData['adminfounds'] = $adminFounds;
        return view("admin.admin.edit") -> with("viewData", $viewData);
    }
    public function update(Request $request, $id) {
        $request -> validate([
            "name" => "required|max:255",
            "email" => "required|email",
            "password" => "required|min:8",
            "role" => "required",
        ]);
        $updateAdmin = User::findOrFail($id);
        $updateAdmin -> setName($request -> input('name'));
        $updateAdmin -> setEmail($request -> input('email'));
        $updateAdmin -> setPassword($request -> input('password'));
        $updateAdmin -> setRole($request -> input('role'));

        $updateAdmin -> save();

        return redirect() -> route("admin.admins.index");

    }
    public function delete($id) {
        User::destroy($id);
        return redirect() -> back();
    }
}
