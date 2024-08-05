<?php

namespace App\Http\Controllers\user_management\sort_by;

use App\Http\Controllers\Controller;
use App\Models\User;

class SortByUserLastNameController extends Controller
{
    public function index(){
      $users = User::orderBy('last_name', 'asc')->where("status", 1)->get();
      return $users;
    }
}
