<?php

namespace App\Http\Controllers\user_management\showAll;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;

class ShowAllControllerUI extends Controller
{
  public function index(){
    $users = User::paginate(10);

    return view('user-management.ShowAllUer', compact('users'));
  }
}
