<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Location::getQuery()->delete();
    Location::create([
      'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.0260872638814!2d-8.46805255693636!3d40.48392684798148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2307e108e6ee71%3A0xef2e5b0afbb46f7b!2sPavilhao+Sangalhos!5e1!3m2!1spt-PT!2spt!4v1463173422890',
    ]);
  }
}
