<?php

namespace App\Http\Controllers\user_management\sort_by;

use App\Http\Controllers\Controller;
use App\Models\User;

class SortByAccountIdController extends Controller
{
    public function index(){
      $users = User::orderBy('account_id', 'asc')->where("status", 1)->get();
      return $users;
    }
}
