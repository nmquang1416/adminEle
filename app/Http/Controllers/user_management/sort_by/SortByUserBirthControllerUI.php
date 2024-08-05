<?php

namespace App\Http\Controllers\user_management\sort_by;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SortByUserBirthControllerUI extends Controller
{
  public function index(Request $request){
    $sortBy = $request->get('sort_by', 'birth');
    $sortOrder = $request->get('sort_order', 'asc');

    $users = User::orderBy($sortBy, $sortOrder)->paginate(10);
//      $users = User::orderBy('account_id', 'asc')->where("status", 1)->get();
//      $paginate = User::paginate(10) -> $users;

    return view('backend-ui.user-management.SortByBirthDay', compact( 'users', 'sortBy', 'sortOrder'));
  }
}
