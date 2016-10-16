<?php

use App\Club;
use App\RelevantEvent;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RelevantEventsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $club = Club::first();

    RelevantEvent::create([ 'club_id' => $club->id, 'at' => Carbon::create(1940, 2, 1, 0, 0, 0, 'Europe/Lisbon'), 'description' => 'Fundação do SDC', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1951, 'description' => 'Volta a Portugal Ganha por "Alves Barbosa"', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1956, 'description' => 'Volta a Portugal Ganha por "Alves Barbosa"', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1958, 'description' => 'Volta a Portugal Ganha por "Alves Barbosa"', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1964, 'description' => 'Inauguração da Pista de Ciclismo', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1969, 'description' => 'Volta a Portugal Ganha por "Joaquim Andrade"', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1970, 'description' => 'Inauguração do Pavilhão Gimnodesportivo', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1974, 'description' => 'Campeonato Nacional de Basquetebol Feminino - 2ª Divisão', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1977, 'description' => 'Taça Cinquentenária de Basquetebol Sénior Masculino', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1991, 'description' => 'Medalha de Bons Serviços Desportivos', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1991, 'description' => 'Pessoa Coletiva de Utilidade Pública', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1991, 'description' => 'Campeonato Nacional de Corfebol', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1993, 'description' => 'Campeonato Nacional de Corfebol', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1993, 'description' => 'Taça Nacional de Corfebol', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1997, 'description' => 'Campeonato Nacional de Basquetebol - Cadetes Masculinos', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1998, 'description' => 'Campeonato Nacional - Juniores B', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 1999, 'description' => 'Taça Nacional de Basquetebol - Juniores B', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 2001, 'description' => 'Reconhecimento do Mérito', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 2002, 'description' => 'Campeonato Nacional de Basquetebol - Séniores', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 2003, 'description' => 'Campeonato Nacional de Basquetebol - Séniores', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 2013, 'description' => 'Inauguração do Novo Pavilhão', ]);
    RelevantEvent::create([ 'club_id' => $club->id, 'year' => 2015, 'description' => 'Taça Nacional - Sub 20', ]);
  }
}
