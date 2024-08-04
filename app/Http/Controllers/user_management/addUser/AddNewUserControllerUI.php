<?php

namespace App\Http\Controllers\user_management\addUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddNewUserControllerUI extends Controller
{
  public function index(){
    return view('user-management.addNewUser');
  }
}
