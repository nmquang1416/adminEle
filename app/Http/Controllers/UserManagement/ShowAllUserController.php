<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;

class ShowAllUserController extends Controller
{
    //
  public function index(){
    return view('user-management.ShowAllUer');
  }
}
