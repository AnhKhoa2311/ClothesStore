<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    // use HasFactory;
    protected $table = "user_informations";
    public function getId() {
        return $this -> attributes['id'];
    }
    public function setId($id) {
        $this -> attributes['id'] = $id;
    }
    public function getName() {
        return $this -> attributes['name'];
    }
    public function setName($name) {
        $this -> attributes['name'] = $name;
    }
    public function getAddress() {
        return $this -> attributes['address'];
    }
    public function setAddress($address) {
        $this -> attributes['address'] = $address;
    }
    public function getPhoneNumber() {
        return $this -> attributes['phone_number'];
    }
    public function setPhoneNumber($phoneNumber) {
        $this -> attributes['phone_number'] = $phoneNumber;
    }
    public function getCountry() {
        return $this -> attributes['country'];
    }
    public function setCountry($country) {
        $this -> attributes['country'] = $country;
    }
    public function getUserAccountId(){
        return $this->attributes['user_account_id'];
        }
    public function setUserAccountId($userId){
        $this->attributes['user_account_id'] = $userId;
    }
    public function user() {
        return $this -> hasOne(User::class);
    }
    public function getUser() {
        return $this -> user;
    }
    public function setUser($user) {
        $this -> user = $user;
    }

}
