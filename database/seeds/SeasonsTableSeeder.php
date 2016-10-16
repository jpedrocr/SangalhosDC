<?php

use App\Club;
use App\Season;
use App\Name;
use App\Team;
use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $club = Club::first();

    $season_2015_2016 = Season::create([ 'starting_year' => 2015, 'ending_year' => 2016, ]);
    $season_2016_2017 = Season::create([ 'starting_year' => 2016, 'ending_year' => 2017, ]);

    $name = Name::create([ 'full' => 'Aliança Sangalhos', ]);
    $team = Team::create([ 'season_id' => $season_2015_2016->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Seniores', 'level' => 'Proliga', 'gender' => 'Masculinos', 'image_slug' => 'equipas-seniorAM2016.jpg', 'external_id' => 27451, ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();
  }
}
