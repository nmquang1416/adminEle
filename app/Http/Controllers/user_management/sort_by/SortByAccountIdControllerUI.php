<?php

namespace App\Http\Controllers\user_management\sort_by;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class SortByAccountIdControllerUI extends Controller
{
    public function index(Request $request){
        $sortBy = $request->get('sort_by', 'account_id');
        $sortOrder = $request->get('sort_order', 'asc');

        $users = User::orderBy($sortBy, $sortOrder)->paginate(10);

      return view('backend-ui.user-management.TableShowAllSortByName', compact( 'users', 'sortBy', 'sortOrder'));
    }
}
