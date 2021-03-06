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
    $this->call(ClubsTableSeeder::class);
    $this->call(RelevantEventsTableSeeder::class);
    $this->call(BoardsTableSeeder::class);
    $this->call(EntitiesTableSeeder::class);
    $this->call(SeasonsTableSeeder::class);
  }
}
