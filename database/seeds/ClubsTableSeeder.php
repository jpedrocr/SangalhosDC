<?php

use App\Club;
use App\Name;
use App\Location;
use App\Contact;
use App\ContactDetail;
use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $name = Name::create([
      'initials' => 'SDC',
      'short' => 'Sangalhos DC',
      'full' => 'Sangalhos Desporto Clube',
    ]);

    $location = Location::create([
      'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.0260872638814!2d-8.46805255693636!3d40.48392684798148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2307e108e6ee71%3A0xef2e5b0afbb46f7b!2sPavilhao+Sangalhos!5e1!3m2!1spt-PT!2spt!4v1463173422890',
    ]);

    $club = Club::create([
      'name_id' => $name->id,
      'location_id' => $location->id,
    ]);

    $name->owner_id = $club->id;
    $name->owner_type = 'Club';
    $name->save();

    $morada = Contact::create([ 'media' => 'Morada', ]);
    $morada_linha_0 = ContactDetail::create(['description' => '0', 'data' => 'Rua Feliciano Godinho Neves', 'contact_id' => $morada->id, ]);
    $morada_linha_1 = ContactDetail::create(['description' => '1', 'data' => '3780-145 Sangalhos', 'contact_id' => $morada->id, ]);
    $club->contacts()->attach($morada);

    $telefone = Contact::create([ 'media' => 'Telefone', ]);
    $telefone_linha_0 = ContactDetail::create(['description' => '0', 'data' => '234741735', 'contact_id' => $telefone->id, ]);
    $club->contacts()->attach($telefone->id);

    $mail = Contact::create([ 'media' => 'Mail', ]);
    $mail_linha_0 = ContactDetail::create(['description' => '0', 'data' => 'sdc.geral@sapo.pt', 'contact_id' => $mail->id, ]);
    $club->contacts()->attach($mail->id);

    $social = Contact::create([ 'media' => 'Social', ]);
    $social_linha_0 = ContactDetail::create(['description' => 'facebook', 'data' => 'https://www.facebook.com/Sangalhos-Desporto-Clube-121425014598291/?fref=ts', 'detail' => 'fa-facebook-square', 'contact_id' => $social->id, ]);
    $club->contacts()->attach($social->id);

  }
}
