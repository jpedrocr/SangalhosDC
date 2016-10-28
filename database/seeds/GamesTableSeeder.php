<?php

use App\Club;
use App\Season;
use App\Team;
use App\Week;
use App\Game;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GamesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    // $happening_at = Carbon\Carbon::create(2016, 10, 29, 16, 30, 0, 'Europe/Lisbon');
    // App\Week::where([ [ 'year', $happening_at->year ], [ 'week_of_year', $happening_at->weekOfYear ] ])->with('games.team')->get()

    $happening_at = Carbon::create(2016, 10, 29, 16, 30, 0, 'Europe/Lisbon');
    Game::create([
      'week_id' => Week::where([ [ 'year', $happening_at->year ], [ 'week_of_year', $happening_at->weekOfYear ] ])->first()->id,
      'happening_at' => $happening_at,
      'game_id' => 155,
      'fpb_id' => 216284,
      'team_id' => Team::where('internal_id', 'seniorAM2016')->first()->id,
      'home' => false,
      'other_team' => 'Casino Ginásio',
      'competition' => 'XIV Campeonato da Proliga',
    ]);

    $happening_at = Carbon::create(2016, 10, 29, 18, 30, 0, 'Europe/Lisbon');
    Game::create([
      'week_id' => Week::where([ [ 'year', $happening_at->year ], [ 'week_of_year', $happening_at->weekOfYear ] ])->first()->id,
      'happening_at' => $happening_at,
      'game_id' => 357,
      'fpb_id' => 221969,
      'team_id' => Team::where('internal_id', 'sub18M2016')->first()->id,
      'home' => false,
      'other_team' => 'SC Beira Mar',
      'competition' => 'Campeonato Distrital de Sub18 Masculinos',
    ]);

    $happening_at = Carbon::create(2016, 10, 29, 21, 0, 0, 'Europe/Lisbon');
    Game::create([
      'week_id' => Week::where([ [ 'year', $happening_at->year ], [ 'week_of_year', $happening_at->weekOfYear ] ])->first()->id,
      'happening_at' => $happening_at,
      'game_id' => 1264,
      'fpb_id' => 217646,
      'team_id' => Team::where('internal_id', 'seniorF2016')->first()->id,
      'home' => true,
      'other_team' => 'CAD / UPCC',
      'competition' => 'L Campeonato Nacional II Divisão Feminina',
    ]);

    $happening_at = Carbon::create(2016, 10, 30, 10, 0, 0, 'Europe/Lisbon');
    Game::create([
      'week_id' => Week::where([ [ 'year', $happening_at->year ], [ 'week_of_year', $happening_at->weekOfYear ] ])->first()->id,
      'happening_at' => $happening_at,
      'team_id' => Team::where('internal_id', 'sub12F2016')->first()->id,
      'home' => false,
      'competition' => 'Concentração de Sub12 Femininos',
      'location' => 'Pavilhão do Esgueira',
    ]);

    $happening_at = Carbon::create(2016, 10, 30, 10, 0, 0, 'Europe/Lisbon');
    Game::create([
      'week_id' => Week::where([ [ 'year', $happening_at->year ], [ 'week_of_year', $happening_at->weekOfYear ] ])->first()->id,
      'happening_at' => $happening_at,
      'team_id' => Team::where('internal_id', 'sub12M2016')->first()->id,
      'home' => false,
      'competition' => 'Concentração de Sub12 Masculinos',
      'location' => 'Pavilhão do Galitos',
    ]);

    $happening_at = Carbon::create(2016, 10, 30, 15, 0, 0, 'Europe/Lisbon');
    Game::create([
      'week_id' => Week::where([ [ 'year', $happening_at->year ], [ 'week_of_year', $happening_at->weekOfYear ] ])->first()->id,
      'happening_at' => $happening_at,
      'game_id' => 259,
      'fpb_id' => 218125,
      'team_id' => Team::where('internal_id', 'sub14M2016')->first()->id,
      'home' => true,
      'other_team' => 'A.D. Sanjoanense',
      'competition' => 'Campeonato Distrital de Sub14 Masculinos',
    ]);

    $happening_at = Carbon::create(2016, 10, 30, 17, 0, 0, 'Europe/Lisbon');
    Game::create([
      'week_id' => Week::where([ [ 'year', $happening_at->year ], [ 'week_of_year', $happening_at->weekOfYear ] ])->first()->id,
      'happening_at' => $happening_at,
      'game_id' => 796,
      'fpb_id' => 217178,
      'team_id' => Team::where('internal_id', 'seniorBM2016')->first()->id,
      'home' => true,
      'other_team' => 'CAD - ACB',
      'competition' => 'IV Campeonato Nacional 1.ª Divisão Masculina',
    ]);

    $happening_at = Carbon::create(2016, 11, 01, 15, 0, 0, 'Europe/Lisbon');
    Game::create([
      'week_id' => Week::where([ [ 'year', $happening_at->year ], [ 'week_of_year', $happening_at->weekOfYear ] ])->first()->id,
      'happening_at' => $happening_at,
      'game_id' => 259,
      'fpb_id' => 218125,
      'team_id' => Team::where('internal_id', 'sub18M2016')->first()->id,
      'home' => true,
      'other_team' => 'Ovarense',
      'competition' => 'Campeonato Distrital de Sub18 Masculino',
    ]);

  }
}
