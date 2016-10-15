<?php

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
Route::get('clube', function () {
    return response()->json([
        'nome' => [
            'iniciais' => 'SDC',
            'abreviado' => 'Sangalhos DC',
            'completo' => 'Sangalhos Desporto Clube'
        ],
        'contatos' => [
            [
                'meio' => 'morada',
                'contacto' => [
                    'Rua Feliciano Godinho Neves',
                    '3780-145 Sangalhos'
                ],
            ],
            [
                'meio' => 'telefone',
                'contacto' => [
                    '234741735'
                ],
            ],
            [
                'meio' => 'mail',
                'contacto' => [
                    'sdc.geral@sapo.pt'
                ],
            ],
            [
                'meio' => 'social',
                'contacto' => [
                    [
                        'plataforma' => 'facebook',
                        'url' => 'https://www.facebook.com/Sangalhos-Desporto-Clube-121425014598291/?fref=ts',
                        'icon' => 'fa-facebook-square'
                    ]
                ],
            ],
        ],
        'horario' => [
            'secretaria' => 'De segunda a sexta, das 17:30 às 23:00',
            'pavilhão' => 'De segunda a sexta, às 17:30'
        ],
        'localização' => [
            'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.0260872638814!2d-8.46805255693636!3d40.48392684798148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2307e108e6ee71%3A0xef2e5b0afbb46f7b!2sPavilhao+Sangalhos!5e1!3m2!1spt-PT!2spt!4v1463173422890'
        ],
    ]);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
