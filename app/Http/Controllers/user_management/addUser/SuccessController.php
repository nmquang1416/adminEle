<?php

namespace App\Http\Controllers\user_management\addUser;

use App\Http\Controllers\Controller;

class SuccessController extends Controller
{
    public function index(){
      return view('/user-management/successPage');
    }
}
