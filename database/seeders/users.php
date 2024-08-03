<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
\Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
\Illuminate\Support\Facades\DB::table('categories')->truncate();


class users extends Seeder
{

  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    //
    $dt = Carbon::now();
    $dateNow = $dt->toDateTimeString();
    DB::table('users')->insert(
      [
//        'account_id' => "141601" . Str::random(4),
//        'user_name' => "user01",
//        'user_password' => Hash::make("user01"),
//        'first_name' => 'Nguyen Minh ',
//        'last_name' => 'Quang',
//        'email' => 'user01@gmail.com',
//        'phone_number' => '0846262588',
//        'favourite' => 'Reading',
//        'birth' => "$dateNow",
//        'salt' => 'salt',
//        'current_coin' => 100,
//        'is_admin' => false,
//        'status' => 1,
//        'created_at' => "$dateNow",
//        'updated_at' => "$dateNow",
//        'deleted_at' => "$dateNow",
//        'created_by' => "user01",
//        'updated_by' => "user01",
//        'deleted_by' => "",
      ]
    );
  }
}
\Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
