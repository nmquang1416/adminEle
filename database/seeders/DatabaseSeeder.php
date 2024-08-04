<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  /**
   * Run the database seeders.
   */
  public function run(): void
  {
    User::factory(100)->create();
    Admin::factory(20) -> create();
  }
}
