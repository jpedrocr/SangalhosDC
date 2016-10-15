<?php

use App\Club;
use App\Name;
use App\Location;
use App\Contact;
use App\ContactDetail;
use App\Schedule;
use App\RelevantEvent;
use App\Person;
use App\Board;
use App\BoardMember;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClubsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $name = Name::create([ 'initials' => 'SDC', 'short' => 'Sangalhos DC', 'full' => 'Sangalhos Desporto Clube', ]);

    $location = Location::create([ 'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.0260872638814!2d-8.46805255693636!3d40.48392684798148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2307e108e6ee71%3A0xef2e5b0afbb46f7b!2sPavilhao+Sangalhos!5e1!3m2!1spt-PT!2spt!4v1463173422890', ]);

    $club = Club::create([ 'name_id' => $name->id, 'location_id' => $location->id, ]);

    $name->owner_id = $club->id; $name->owner_type = 'Club'; $name->save();

    $morada = Contact::create([ 'club_id' => $club->id, 'media' => 'Morada', ]);
    ContactDetail::create([ 'contact_id' => $morada->id, 'description' => '0', 'data' => 'Rua Feliciano Godinho Neves', ]);
    ContactDetail::create([ 'contact_id' => $morada->id, 'description' => '1', 'data' => '3780-145 Sangalhos', ]);

    $telefone = Contact::create([ 'club_id' => $club->id, 'media' => 'Telefone', ]);
    ContactDetail::create([ 'contact_id' => $telefone->id, 'description' => '0', 'data' => '234741735', ]);

    $mail = Contact::create([ 'club_id' => $club->id, 'media' => 'Mail', ]);
    ContactDetail::create([ 'contact_id' => $mail->id, 'description' => '0', 'data' => 'sdc.geral@sapo.pt', ]);

    $social = Contact::create([ 'club_id' => $club->id, 'media' => 'Social', ]);
    ContactDetail::create([ 'contact_id' => $social->id, 'description' => 'facebook', 'data' => 'https://www.facebook.com/Sangalhos-Desporto-Clube-121425014598291/?fref=ts', 'detail' => 'fa-facebook-square', ]);

    Schedule::create([ 'club_id' => $club->id, 'description' => 'Secretaria', 'detail' => 'De segunda a sexta, das 17:30 às 23:00', ]);
    Schedule::create([ 'club_id' => $club->id, 'description' => 'Pavilhão', 'detail' => 'De segunda a sexta, às 17:30', ]);

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

    $direcao = Board::create([ 'club_id' => $club->id, 'description' => 'Direção', ]);
    $a_geral = Board::create([ 'club_id' => $club->id, 'description' => 'Assembleia Geral', ]);
    $c_fiscal = Board::create([ 'club_id' => $club->id, 'description' => 'Conselho Fiscal', ]);

    $name = Name::create([ 'first' => 'Jorge', 'last' => 'Ribeiro', 'full' => 'Jorge Ribeiro', ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-jorge-ribeiro.png', ]);
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'Presidente da Direção', ]);

    $name = Name::create([ 'first' => 'Rui', 'last' => 'Gradeço', 'full' => 'Rui Gradeço' ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-rui-gradeco.png', ]);
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'Vice-Presidente da Direção', ]);

    $name = Name::create([ 'first' => 'Álvaro', 'last' => 'Calvo', 'full' => 'Álvaro Calvo' ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-alvaro-calvo.png', ]);
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'Vogal da Direção', ]);

    $name = Name::create([ 'first' => 'José', 'last' => 'Maia', 'full' => 'José Maia' ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-jose-maia.png', ]);
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'V. P. Área Desportiva', ]);

    $name = Name::create([ 'first' => 'Teresa', 'last' => 'Figueiredo', 'full' => 'Teresa Figueiredo' ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-teresa-figueiredo.png', ]);
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'V. P. Área de Marketing e Relações Públicas', ]);

    $name = Name::create([ 'first' => 'Débora', 'last' => 'Tavares', 'full' => 'Débora Tavares' ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-debora-tavares.png', ]);
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'Vogal Área de Marketing e Relações Públicas', ]);

    $name = Name::create([ 'first' => 'Mário', 'last' => 'Rocha', 'full' => 'Mário Rocha' ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-mario-rocha.png', ]);
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'V. P. Área do Património', ]);

    $name = Name::create([ 'first' => 'Germano', 'last' => 'Ribeiro', 'full' => 'Germano Ribeiro' ]);
    $person = Person::create([ 'name_id' => $name->id, 'image_slug' => 'orgaos-germano-ribeiro.png', ]);
    BoardMember::create([ 'board_id' => $direcao->id, 'person_id' => $person->id, 'role' => 'Vogal Área do Património', ]);

    $name = Name::create([ 'first' => 'Sérgio', 'last' => 'Santos', 'full' => 'Sérgio Santos' ]);
    $person = Person::create([ 'name_id' => $name->id, ]);
    BoardMember::create([ 'board_id' => $a_geral->id, 'person_id' => $person->id, 'role' => 'Presidente', ]);

    $name = Name::create([ 'first' => 'Humberto', 'last' => 'Mendes', 'full' => 'Humberto Mendes' ]);
    $person = Person::create([ 'name_id' => $name->id, ]);
    BoardMember::create([ 'board_id' => $a_geral->id, 'person_id' => $person->id, 'role' => 'Vice-Presidente', ]);

    $name = Name::create([ 'first' => 'Isilda', 'last' => 'Silva', 'full' => 'Isilda Silva' ]);
    $person = Person::create([ 'name_id' => $name->id, ]);
    BoardMember::create([ 'board_id' => $a_geral->id, 'person_id' => $person->id, 'role' => 'Secretária', ]);

    $name = Name::create([ 'first' => 'Jorge Humberto', 'last' => 'Mendes', 'full' => 'Jorge Humberto Mendes', ]);
    $person = Person::create([ 'name_id' => $name->id, ]);
    BoardMember::create([ 'board_id' => $c_fiscal->id, 'person_id' => $person->id, 'role' => 'Presidente', ]);

    $name = Name::create([ 'first' => 'Jorge', 'last' => 'Silva', 'full' => 'Jorge Silva' ]);
    $person = Person::create([ 'name_id' => $name->id, ]);
    BoardMember::create([ 'board_id' => $c_fiscal->id, 'person_id' => $person->id, 'role' => 'Secretário', ]);

    $name = Name::create([ 'first' => 'Jorge', 'last' => 'Soares', 'full' => 'Jorge Soares' ]);
    $person = Person::create([ 'name_id' => $name->id, ]);
    BoardMember::create([ 'board_id' => $c_fiscal->id, 'person_id' => $person->id, 'role' => 'Secretário', ]);

    $name = Name::create([ 'first' => 'Jorge', 'last' => 'Cunha', 'full' => 'Jorge Cunha' ]);
    $person = Person::create([ 'name_id' => $name->id, ]);
    BoardMember::create([ 'board_id' => $c_fiscal->id, 'person_id' => $person->id, 'role' => 'Vogal', ]);

  }
}
