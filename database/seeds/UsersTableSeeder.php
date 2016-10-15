<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'name' => 'José Pedro Cardoso Rodrigues',
      'email' => 'jpedrocr@gmail.com',
      'password' => Hash::make('0lpXAGDpnS1AI1eCHckCFht'),
    ]);
  }
}
