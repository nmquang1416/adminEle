<?php

namespace App\Http\Controllers\user_management\EditUser;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EditUserController extends Controller
{
    public function index(Request $request, $id){
      $user = User::find($id)->where('status', 1)->first();
      return $user;
    }
}
