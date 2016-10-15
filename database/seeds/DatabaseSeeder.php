<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $this->call(CleanTablesSeeder::class);
    $this->call(UsersTableSeeder::class);
    // $this->call(NamesTableSeeder::class);
    // $this->call(LocationsTableSeeder::class);
    $this->call(ClubsTableSeeder::class);
  }
}
