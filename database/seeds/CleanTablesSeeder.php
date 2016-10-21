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
use App\Entity;
use App\Season;
use App\Team;
use App\Page;
use App\Category;
use App\Post;
use App\ContentBreak;
use App\ContentHeader;
use App\ContentHTML;
use App\ContentImage;
use App\ContentLink;
use App\ContentParagraph;
use App\ContentQA;
use App\Element;
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
    Element::getQuery()->delete();
    ContentQA::getQuery()->delete();
    ContentParagraph::getQuery()->delete();
    ContentLink::getQuery()->delete();
    ContentImage::getQuery()->delete();
    ContentHTML::getQuery()->delete();
    ContentHeader::getQuery()->delete();
    ContentBreak::getQuery()->delete();
    Post::getQuery()->delete();
    Category::getQuery()->delete();
    Page::getQuery()->delete();
    User::getQuery()->delete();
    Team::getQuery()->delete();
    Season::getQuery()->delete();
    Entity::getQuery()->delete();
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
