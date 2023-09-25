<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInformationController extends Controller
{
    public function index() {
        $viewData = [];
        $viewData['title'] = "Information Form";
        return view("myaccount.forminfor") -> with("viewData", $viewData);
    }
    public function store(Request $request) {
        $request -> validate([
            "name" => "required|max:255",
            "address" => "required|max:255",
            "phone" => "required|min:10",
            "country" => "required|max:50",
        ]);
        $currentUserById = Auth::user() -> getAuthIdentifier();
        $userInfor = new UserInformation();
        $userInfor -> setUserAccountId($currentUserById);
        $userInfor -> setName($request -> input('name'));
        $userInfor -> setAddress($request -> input('address'));
        $userInfor -> setPhoneNumber($request -> input('phone'));
        $userInfor -> setCountry($request -> input('country'));

        $userInfor -> save();

        return redirect() -> route('user.userinfo.personal');
    }
    public function showInfo() {
        $viewData = [];
        $viewData['title'] = "Personal Information";
        $currentUserId = Auth::user() -> getAuthIdentifier();
        $getUser = UserInformation::all() -> where('user_account_id', $currentUserId);
        $viewData['user'] = $getUser;

        return view("myaccount.showinfor") -> with("viewData", $viewData);
    }
    public function edit($id) {
        $viewData = [];
        $getUser = UserInformation::findOrFail($id);
        $viewData['title'] = "Edit Personal Information";
        $viewData['getedituser'] = $getUser;

        return view("myaccount.formupdate") -> with("viewData", $viewData);
    }
    public function update(Request $request, $id) {
        $request -> validate([
            "name" => "required|max:255",
            "address" => "required|max:255",
            "phone" => "required|min:10",
            "country" => "required|max:50",
        ]);
        // $getUserId = Auth::user() -> getAuthIdentifier();
        // $getUserToUpdate = UserInformation::all() -> where('user_account_id', $getUserId);
        $getUserToUpdate = UserInformation::findOrFail($id);
        $getUserToUpdate -> setName($request -> input('name'));
        $getUserToUpdate -> setAddress($request -> input('address'));
        $getUserToUpdate -> setPhoneNumber($request -> input('phone'));
        $getUserToUpdate -> setCountry($request -> input('country'));

        $getUserToUpdate -> save();
        return redirect() -> route("user.userinfo.personal");
    }
}
