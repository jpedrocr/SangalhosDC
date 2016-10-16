<?php

use App\Club;
use App\Name;
use App\Person;
use App\Board;
use App\BoardMember;
use Illuminate\Database\Seeder;

class BoardsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $club = Club::first();

    $direcao = Board::create([ 'club_id' => $club->id, 'description' => 'Direção', ]);
    $a_geral = Board::create([ 'club_id' => $club->id, 'description' => 'Assembleia Geral', ]);
    $c_fiscal = Board::create([ 'club_id' => $club->id, 'description' => 'Conselho Fiscal', ]);

    $name = Name::create([ 'first' => 'Jorge', 'last' => 'Ribeiro', 'full' => 'Jorge Ribeiro', ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-jorge-ribeiro.png', ]);
    $name->owner_id = $person->id; $name->owner_type = 'App\Person'; $name->save();
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'Presidente da Direção', ]);

    $name = Name::create([ 'first' => 'Rui', 'last' => 'Gradeço', 'full' => 'Rui Gradeço' ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-rui-gradeco.png', ]);
    $name->owner_id = $person->id; $name->owner_type = 'App\Person'; $name->save();
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'Vice-Presidente da Direção', ]);

    $name = Name::create([ 'first' => 'Álvaro', 'last' => 'Calvo', 'full' => 'Álvaro Calvo' ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-alvaro-calvo.png', ]);
    $name->owner_id = $person->id; $name->owner_type = 'App\Person'; $name->save();
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'Vogal da Direção', ]);

    $name = Name::create([ 'first' => 'José', 'last' => 'Maia', 'full' => 'José Maia' ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-jose-maia.png', ]);
    $name->owner_id = $person->id; $name->owner_type = 'App\Person'; $name->save();
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'V. P. Área Desportiva', ]);

    $name = Name::create([ 'first' => 'Teresa', 'last' => 'Figueiredo', 'full' => 'Teresa Figueiredo' ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-teresa-figueiredo.png', ]);
    $name->owner_id = $person->id; $name->owner_type = 'App\Person'; $name->save();
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'V. P. Área de Marketing e Relações Públicas', ]);

    $name = Name::create([ 'first' => 'Débora', 'last' => 'Tavares', 'full' => 'Débora Tavares' ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-debora-tavares.png', ]);
    $name->owner_id = $person->id; $name->owner_type = 'App\Person'; $name->save();
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'Vogal Área de Marketing e Relações Públicas', ]);

    $name = Name::create([ 'first' => 'Mário', 'last' => 'Rocha', 'full' => 'Mário Rocha' ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-mario-rocha.png', ]);
    $name->owner_id = $person->id; $name->owner_type = 'App\Person'; $name->save();
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'V. P. Área do Património', ]);

    $name = Name::create([ 'first' => 'Germano', 'last' => 'Ribeiro', 'full' => 'Germano Ribeiro' ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-germano-ribeiro.png', ]);
    $name->owner_id = $person->id; $name->owner_type = 'App\Person'; $name->save();
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'Vogal Área do Património', ]);

    $name = Name::create([ 'first' => 'Sérgio', 'last' => 'Santos', 'full' => 'Sérgio Santos' ]);
    $person = Person::create([ 'name_id' => $name->id, ]);
    $name->owner_id = $person->id; $name->owner_type = 'App\Person'; $name->save();
    BoardMember::create([ 'board_id' => $a_geral->id, 'person_id' => $person->id, 'role' => 'Presidente', ]);

    $name = Name::create([ 'first' => 'Humberto', 'last' => 'Mendes', 'full' => 'Humberto Mendes' ]);
    $person = Person::create([ 'name_id' => $name->id, ]);
    $name->owner_id = $person->id; $name->owner_type = 'App\Person'; $name->save();
    BoardMember::create([ 'board_id' => $a_geral->id, 'person_id' => $person->id, 'role' => 'Vice-Presidente', ]);

    $name = Name::create([ 'first' => 'Isilda', 'last' => 'Silva', 'full' => 'Isilda Silva' ]);
    $person = Person::create([ 'name_id' => $name->id, ]);
    $name->owner_id = $person->id; $name->owner_type = 'App\Person'; $name->save();
    BoardMember::create([ 'board_id' => $a_geral->id, 'person_id' => $person->id, 'role' => 'Secretária', ]);

    $name = Name::create([ 'first' => 'Jorge Humberto', 'last' => 'Mendes', 'full' => 'Jorge Humberto Mendes', ]);
    $person = Person::create([ 'name_id' => $name->id, ]);
    $name->owner_id = $person->id; $name->owner_type = 'App\Person'; $name->save();
    BoardMember::create([ 'board_id' => $c_fiscal->id, 'person_id' => $person->id, 'role' => 'Presidente', ]);

    $name = Name::create([ 'first' => 'Jorge', 'last' => 'Silva', 'full' => 'Jorge Silva' ]);
    $person = Person::create([ 'name_id' => $name->id, ]);
    $name->owner_id = $person->id; $name->owner_type = 'App\Person'; $name->save();
    BoardMember::create([ 'board_id' => $c_fiscal->id, 'person_id' => $person->id, 'role' => 'Secretário', ]);

    $name = Name::create([ 'first' => 'Jorge', 'last' => 'Soares', 'full' => 'Jorge Soares' ]);
    $person = Person::create([ 'name_id' => $name->id, ]);
    $name->owner_id = $person->id; $name->owner_type = 'App\Person'; $name->save();
    BoardMember::create([ 'board_id' => $c_fiscal->id, 'person_id' => $person->id, 'role' => 'Secretário', ]);

    $name = Name::create([ 'first' => 'Jorge', 'last' => 'Cunha', 'full' => 'Jorge Cunha' ]);
    $person = Person::create([ 'name_id' => $name->id, ]);
    $name->owner_id = $person->id; $name->owner_type = 'App\Person'; $name->save();
    BoardMember::create([ 'board_id' => $c_fiscal->id, 'person_id' => $person->id, 'role' => 'Vogal', ]);
  }
}
