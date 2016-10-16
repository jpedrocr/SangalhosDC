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

    $name = Name::create([ 'full' => 'Aliança Sangalhos', ]);
    $team = Team::create([ 'season_id' => $season_2015_2016->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Seniores', 'level' => 'Proliga', 'gender' => 'Masculinos', 'image_slug' => 'senioresA.jpg', 'external_id' => 24833, 'internal_id' => 'seniorAM', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos B/ Sunlive Group', ]);
    $team = Team::create([ 'season_id' => $season_2015_2016->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Seniores', 'level' => 'CN 1.ª Divisão', 'gender' => 'Masculinos', 'image_slug' => 'senioresB.jpg', 'external_id' => 24958, 'internal_id' => 'seniorBM', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos/ Rochauto/ Yeapstore', ]);
    $team = Team::create([ 'season_id' => $season_2015_2016->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 19', 'level' => 'Sub 19 F', 'gender' => 'Femininos', 'image_slug' => 'sub19F.jpg', 'external_id' => 25393, 'internal_id' => 'sub19F', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos DC', ]);
    $team = Team::create([ 'season_id' => $season_2015_2016->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 18', 'level' => 'Sub 18 M', 'gender' => 'Masculinos', 'image_slug' => 'sub18M.jpg', 'external_id' => 25408, 'internal_id' => 'sub18M', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos/ Moreira', ]);
    $team = Team::create([ 'season_id' => $season_2015_2016->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 16', 'level' => 'Sub 16 M', 'gender' => 'Masculinos', 'image_slug' => 'sub16M.jpg', 'external_id' => 25462, 'internal_id' => 'sub16M', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos/ Moreira', ]);
    $team = Team::create([ 'season_id' => $season_2015_2016->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 16', 'level' => 'Sub 16 F', 'gender' => 'Femininos', 'image_slug' => 'sub16F.jpg', 'external_id' => 25420, 'internal_id' => 'sub16F', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos/ Valorpneu', ]);
    $team = Team::create([ 'season_id' => $season_2015_2016->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 14', 'level' => 'Sub 14 M', 'gender' => 'Masculinos', 'image_slug' => 'sub14M.jpg', 'external_id' => 25490, 'internal_id' => 'sub14M', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos/ Boomerang/ Litoprint', ]);
    $team = Team::create([ 'season_id' => $season_2015_2016->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 14', 'level' => 'Sub 14 F', 'gender' => 'Femininos', 'image_slug' => 'sub14F.jpg', 'external_id' => 25485, 'internal_id' => 'sub14F', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos/ Moreira', ]);
    $team = Team::create([ 'season_id' => $season_2015_2016->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 13', 'level' => 'Mini 12 M', 'gender' => 'Masculinos', 'image_slug' => 'sub13M.jpg', 'external_id' => 25810, 'internal_id' => 'sub13M', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos/ Moreira', ]);
    $team = Team::create([ 'season_id' => $season_2015_2016->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Minis', 'level' => 'Minis', 'gender' => null, 'image_slug' => 'minis3.jpg', 'external_id' => null, 'internal_id' => 'minis', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $season_2016_2017 = Season::create([ 'starting_year' => 2016, 'ending_year' => 2017, ]);

    $name = Name::create([ 'full' => 'Aliança Sangalhos', ]);
    $team = Team::create([ 'season_id' => $season_2016_2017->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Seniores', 'level' => 'Proliga', 'gender' => 'Masculinos', 'image_slug' => 'senioresA.jpg', 'external_id' => 24833, 'internal_id' => 'seniorAM', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Aliança Sangalhos', ]);
    $team = Team::create([ 'season_id' => $season_2016_2017->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Seniores', 'level' => 'Proliga', 'gender' => 'Masculinos', 'image_slug' => 'seniorAM2016.jpg', 'external_id' => 27451, 'internal_id' => 'seniorAM2016', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos B/ Sunlive Group', ]);
    $team = Team::create([ 'season_id' => $season_2016_2017->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Seniores', 'level' => 'CN 1.ª Divisão', 'gender' => 'Masculinos', 'image_slug' => 'seniorBM2016.jpg', 'external_id' => 27478, 'internal_id' => 'seniorBM2016', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos/ Rochauto/ Yeapstore', ]);
    $team = Team::create([ 'season_id' => $season_2016_2017->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Seniores', 'level' => '2Div F', 'gender' => 'Femininos', 'image_slug' => 'seniorF2016.jpg', 'external_id' => 27477, 'internal_id' => 'seniorF2016', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos DC', ]);
    $team = Team::create([ 'season_id' => $season_2016_2017->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 18', 'level' => 'Sub 18 M', 'gender' => 'Masculinos', 'image_slug' => 'sub18M2016.jpg', 'external_id' => 28186, 'internal_id' => 'sub18M2016', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos A/ Moreira', ]);
    $team = Team::create([ 'season_id' => $season_2016_2017->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 16', 'level' => 'Sub 16 M', 'gender' => 'Masculinos', 'image_slug' => 'sub16MA2016.jpg', 'external_id' => 28204, 'internal_id' => 'sub16MA2016', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos B/ Moreira', ]);
    $team = Team::create([ 'season_id' => $season_2016_2017->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 16', 'level' => 'Sub 16 M', 'gender' => 'Masculinos', 'image_slug' => 'sub16MB2016.jpg', 'external_id' => 28247, 'internal_id' => 'sub16MB2016', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos/ Moreira', ]);
    $team = Team::create([ 'season_id' => $season_2016_2017->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 16', 'level' => 'Sub 16 F', 'gender' => 'Femininos', 'image_slug' => 'sub16F2016.jpg', 'external_id' => 28191, 'internal_id' => 'sub16F2016', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos/ Valorpneu', ]);
    $team = Team::create([ 'season_id' => $season_2016_2017->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 14', 'level' => 'Sub 14 M', 'gender' => 'Masculinos', 'image_slug' => 'sub14M2016.jpg', 'external_id' => 28232, 'internal_id' => 'sub14M2016', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos/ Moreira', ]);
    $team = Team::create([ 'season_id' => $season_2016_2017->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 12', 'level' => 'Mini 12 M', 'gender' => 'Masculinos', 'image_slug' => 'sub12M2016.jpg', 'external_id' => null, 'internal_id' => 'sub12M2016', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos/ Moreira', ]);
    $team = Team::create([ 'season_id' => $season_2016_2017->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 12', 'level' => 'Minis 12 F', 'gender' => 'Femininos', 'image_slug' => 'sub12F2016.jpg', 'external_id' => null, 'internal_id' => 'sub12F2016', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos/ Moreira', ]);
    $team = Team::create([ 'season_id' => $season_2016_2017->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 10', 'level' => 'Minis', 'gender' => null, 'image_slug' => 'sub10_2016.jpg', 'external_id' => null, 'internal_id' => 'sub10_2016', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos/ Moreira', ]);
    $team = Team::create([ 'season_id' => $season_2016_2017->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Sub 8', 'level' => 'Minis', 'gender' => null, 'image_slug' => 'sub8_2016.jpg', 'external_id' => null, 'internal_id' => 'sub8_2016', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

    $name = Name::create([ 'full' => 'Sangalhos/ Moreira', ]);
    $team = Team::create([ 'season_id' => $season_2016_2017->id, 'club_id' => $club->id, 'name_id' => $name->id, 'agegroup' => 'Babies', 'level' => 'Babies', 'gender' => null, 'image_slug' => 'babies_2016.jpg', 'external_id' => null, 'internal_id' => 'babies_2016', ]);
    $name->owner_id = $team->id; $name->owner_type = 'App\Team'; $name->save();

  }
}
