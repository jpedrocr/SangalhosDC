<?php

use App\Club;
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
Route::get('board-members', function () {
  return response(
    Club::with('boards.board_members.person.name')
      ->first()
      ->makeHidden(['description0', 'description1', 'description2', 'nipc'])
      ->toJson()
  );
});

Route::get('relevant-events', function () {
  return response(
    Club::with('relevant_events')
      ->first()
      ->makeHidden(['description0', 'description1', 'description2', 'nipc'])
      ->toJson()
  );
});

Route::get('contacts', function () {
  return response(
  Club::with('name', 'contacts.contact_details', 'schedules', 'location')
  ->first()
  ->makeHidden(['description0', 'description1', 'description2', 'nipc'])
  ->toJson()
);
});

Route::get('footer', function () {
  return response(
    Club::with('name', 'contacts.contact_details')
      ->first()
      ->toJson()
  );
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
