<?php

namespace App\Http\Controllers\user_management\addUser;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Controllers\StoreProductRequest;


class AddNewUserController extends Controller
{
    public function index(){

      $dt = Carbon::now();
      $dateNow = $dt->toDateTimeString();
      $user = new User();

      $user -> account_id = "141601" . Str::random(4);
      $user -> user_name = request('user_name');
      $user -> user_password = hash::make(request('user_password'));
      $user -> first_name = request('first_name');
      $user -> last_name = request('last_name');
      $user -> email = request('email');
      $user -> phone_number = request('phone_number');
      $user -> favourite = request('favourite');
      $user -> birth = request('birth');
      $user -> salt = "salt";
      $user -> current_coin = 50;
      $user -> is_admin = false;
      $user -> status = 1;
      $user -> created_at = "$dateNow";
      $user -> updated_at = "$dateNow";
      $user -> deleted_at = "$dateNow";
      $user -> created_by = $user->user_name;
      $user -> updated_by = $user->user_name;
      $user -> deleted_by = $user->user_name;

      $user -> save();

        return view("user-management.successPage");
    }
}
