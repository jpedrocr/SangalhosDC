<?php

use App\User;
use App\Club;
use App\Name;
use App\Location;
use App\Contact;
use App\ContactDetail;
use Illuminate\Database\Seeder;

class CleanTablesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::getQuery()->delete();
    Club::getQuery()->delete();
    Name::getQuery()->delete();
    Location::getQuery()->delete();
    ContactDetail::getQuery()->delete();
    Contact::getQuery()->delete();
  }
}
