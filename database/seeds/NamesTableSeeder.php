<?php

use App\Name;
use Illuminate\Database\Seeder;

class NamesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Name::getQuery()->delete();
    Name::create([
      'initials' => 'SDC',
      'short' => 'Sangalhos DC',
      'full' => 'Sangalhos Desporto Clube',
    ]);
  }
}
