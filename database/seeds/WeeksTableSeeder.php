<?php

use App\Week;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class WeeksTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $date = Carbon::create(2016, 1, 3, 0, 0, 0, 'Europe/Lisbon');
    while ($date->year <= 2016) {
      Week::create([ 'sunday' => $date, 'year' => $date->year, 'week_of_year' => $date->weekOfYear ]);
      $date = $date->addWeek();
    }
    while ($date->year <= 2017) {
      Week::create([ 'sunday' => $date, 'year' => $date->year, 'week_of_year' => $date->weekOfYear ]);
      $date = $date->addWeek();
    }
  }
}
