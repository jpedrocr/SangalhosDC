<?php

use App\Club;
use App\Name;
use App\Location;
use App\Contact;
use App\ContactDetail;
use App\Schedule;
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

    $club = Club::create([ 'name_id' => $name->id, 'location_id' => $location->id, 'nipc' => 501302220, 'description0' => 'Instituição de Utilidade Pública', 'description1' => 'Fundado em janeiro de 1940', 'description2' => 'Medalha de Bons Serviços Desportivos', ]);

    $name->owner_id = $club->id; $name->owner_type = 'App\Club'; $name->save();

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
  }
}
