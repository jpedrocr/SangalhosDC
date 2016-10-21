<?php

use App\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Page::create([ 'slug' => 'inicio', 'menu_tittle' => 'Início', ]);

    Page::create([ 'slug' => 'sdc-historia', 'menu_tittle' => 'História', 'tittle' => 'História', 'subtittle' => '1940-2016', ]);
    Page::create([ 'slug' => 'sdc-orgaos', 'menu_tittle' => 'Orgãos do Clube', 'tittle' => 'Orgãos do Clube', ]);
    Page::create([ 'slug' => 'sdc-datas', 'menu_tittle' => 'Datas Importantes/Palmarés', 'tittle' => 'Datas Importantes/Palmarés' ]);
    Page::create([ 'slug' => 'sdc-estatutos', 'menu_tittle' => 'Estatutos, Regulamento e Legislação', 'tittle' => 'Estatutos, Regulamento e Legislação' ]);
    Page::create([ 'slug' => 'sdc-ligacoes', 'menu_tittle' => 'Ligações Úteis', 'tittle' => 'Ligações Úteis', ]);
    Page::create([ 'slug' => 'sdc-socios', 'menu_tittle' => 'Sócios', 'tittle' => 'Faz-te sócio do Sangalhos Desporto Clube', ]);

    Page::create([ 'slug' => 'equipas', 'menu_tittle' => 'Equipas', 'tittle' => 'Equipas', ]);

    Page::create([ 'slug' => 'parcerias', 'menu_tittle' => 'Parcerias', ]);

    Page::create([ 'slug' => 'produtos', 'menu_tittle' => 'Produtos SDC', 'tittle' => 'Produtos do SDC', ]);

    Page::create([ 'slug' => 'galeria', 'menu_tittle' => 'Galeria', 'tittle' => 'Galeria', ]);

    Page::create([ 'slug' => 'contactos', 'menu_tittle' => 'Contactos', 'tittle' => 'Contactos', ]);
  }
}
