<?php

use App\Club;
use App\Season;
use App\Page;
use App\Post;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// App\Post::where('slug', 'n0')->with('elements.content')->first()->toArray()
Route::get('post/{post_slug}', function ($post_slug) {
  $with = [
    'inicio-calendario' => 'elements.content.games.team.name',
  ];
  return response(
    Post::where('slug', $post_slug)
      ->with(array_get($with, $post_slug, 'elements.content'))
      ->first()
      ->toJson()
  );
});
// App\Page::where('slug', 'galeria')->with('posts.elements.content')->first()->toArray()
Route::get('page/{page_slug}', function ($page_slug) {
  $with = [
    'sdc-orgaos' => 'posts.elements.content.board_members.person.name',
    'sdc-datas' => 'posts.elements.content.relevant_events',
    'equipas' => 'posts.elements.content.seasons.teams',
    'parcerias' => ['posts.elements.content.sponsors.name', 'posts.elements.content.partners.name'],
    'contactos' => 'posts.elements.content.contacts.contact_details',
    'noticias' => 'posts.elements.content.posts.elements.content',
    'eventos' => 'posts.elements.content.posts.elements.content',
    'galeria' => 'posts.elements.content.posts.elements.content',
  ];
  return response(
    Page::where('slug', $page_slug)
      ->with(array_get($with, $page_slug, 'posts.elements.content'))
      ->with()
      ->first()
      ->toJson()
  );
});





Route::get('board-members', function () {
  return response(
    Club::with('boards.board_members.person.name')
      ->first()
      ->toJson()
  );
});

Route::get('relevant-events', function () {
  return response(
    Club::with('relevant_events')
      ->first()
      ->toJson()
  );
});

Route::get('entities', function () {
  return response(
    Club::with('sponsors.name', 'partners.name')
      ->first()
      ->toJson()
  );
});

Route::get('teams', function () {
  return response(
    Season::with('teams.name')
      ->get()
      ->toJson()
  );
});

Route::get('contacts', function () {
  return response(
    Club::with('name', 'contacts.contact_details', 'schedules', 'location')
    ->first()
    ->toJson()
  );
});

Route::get('footer', function () {
  return response(
    Club::with('name', 'contacts.contact_details')
      ->first()
      ->makeVisible(['description0', 'description1', 'description2', 'nipc'])
      ->toJson()
  );
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
