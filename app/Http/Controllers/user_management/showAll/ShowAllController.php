<?php

namespace App\Http\Controllers\user_management\showAll;

use App\Http\Controllers\Controller;
use App\Models\User;

class ShowAllController extends Controller
{
    //
  public function index(){
    $users = User::all();
    return $users;
  }
}
