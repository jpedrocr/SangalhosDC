<?php

use App\User;
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
    BoardMember::getQuery()->delete();
    Board::getQuery()->delete();
    Person::getQuery()->delete();
    RelevantEvent::getQuery()->delete();
    Schedule::getQuery()->delete();
    ContactDetail::getQuery()->delete();
    Contact::getQuery()->delete();
    Club::getQuery()->delete();
    Name::getQuery()->delete();
    Location::getQuery()->delete();
  }
}
