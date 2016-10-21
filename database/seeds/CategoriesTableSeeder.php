<?php

use App\Page;
use App\Category;
use App\Post;
use App\ContentParagraph;
use App\Element;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $cat_pagina_id = Category::create([ 'description' => 'Página', ])->id;
    $cat_noticia_id = Category::create([ 'description' => 'Notícia', ])->id;
    $cat_evento_id = Category::create([ 'description' => 'Evento', ])->id;
    $cat_galeria_id = Category::create([ 'description' => 'Galeria', ])->id;

    Page::create([ 'slug' => 'inicio', 'menu_tittle' => 'Início', ])->posts()->saveMany([
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'inicio-noticias-slider', ]),
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'inicio-noticias-fixas', ]),
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'inicio-calendario', ]),
    ]);

    Page::create([ 'slug' => 'sdc-historia', 'menu_tittle' => 'História', 'tittle' => 'História', 'subtittle' => '1940-2016', ])->posts()->saveMany([
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'sdc-historia', 'image_slug' => 'historia.jpg', ])
    ]);

    Page::create([ 'slug' => 'sdc-orgaos', 'menu_tittle' => 'Orgãos do Clube', ])->posts()->saveMany([
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'sdc-orgaos-direcao', 'tittle' => 'Direção', ]),
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'sdc-orgaos-ageral', 'tittle' => 'Assembleia Geral', ]),
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'sdc-orgaos-cfiscal', 'tittle' => 'Conselho Fiscal', ]),
    ]);

    Page::create([ 'slug' => 'sdc-datas', 'menu_tittle' => 'Datas Importantes/Palmarés', 'tittle' => 'Datas Importantes/Palmarés' ])->posts()->saveMany([
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'sdc-datas', 'image_slug' => 'datas.png', ]),
    ]);

    Page::create([ 'slug' => 'sdc-estatutos', 'menu_tittle' => 'Estatutos, Regulamento e Legislação', 'tittle' => 'Estatutos, Regulamento e Legislação' ])->posts()->saveMany([
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'sdc-estatutos', ]),
    ]);

    Page::create([ 'slug' => 'sdc-ligacoes', 'menu_tittle' => 'Ligações Úteis', 'tittle' => 'Ligações Úteis', ])->posts()->saveMany([
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'sdc-ligacoes', ]),
    ]);

    Page::create([ 'slug' => 'sdc-socios', 'menu_tittle' => 'Sócios', 'tittle' => 'Faz-te sócio do Sangalhos Desporto Clube', ])->posts()->saveMany([
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'sdc-socios', 'image_slug' => 'socios_20161019.jpg', ]),
    ]);

    Page::create([ 'slug' => 'equipas', 'menu_tittle' => 'Equipas', 'tittle' => 'Equipas', ])->posts()->saveMany([
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'equipas', ]),
    ]);

    Page::create([ 'slug' => 'parcerias', 'menu_tittle' => 'Parcerias', ])->posts()->saveMany([
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'parcerias-patrocinadores', 'tittle' => 'Patrocinadores', ]),
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'parcerias-parceiros', 'tittle' => 'Parceiros', ]),
    ]);

    Page::create([ 'slug' => 'produtos', 'menu_tittle' => 'Produtos SDC', 'tittle' => 'Produtos do SDC', ])->posts()->saveMany([
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'produtos', ]),
    ]);

    Page::create([ 'slug' => 'contactos', 'menu_tittle' => 'Contactos', 'tittle' => 'Contactos', ])->posts()->saveMany([
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'contactos', ]),
    ]);

    Page::create([ 'slug' => 'noticias', 'tittle' => 'Notícias', ])->posts()->saveMany([
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'noticias', ]),
    ]);

    Page::create([ 'slug' => 'eventos', 'tittle' => 'Eventos', ])->posts()->saveMany([
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'eventos', ]),
    ]);

    Page::create([ 'slug' => 'galeria', 'menu_tittle' => 'Galeria', 'tittle' => 'Galeria', ])->posts()->saveMany([
      new Post([ 'category_id' => $cat_pagina_id, 'slug' => 'galeria', ]),
    ]);

    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'n0',
      'image_slug' => '0.JPG',
      'tittle' => 'Basquetebol é no Sangalhos',
      'published_at' => Carbon::create(2016, 9, 29, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'n1',
      'image_slug' => '1.JPG',
      'tittle' => 'Mapa de treinos 2016/2017',
      'published_at' => Carbon::create(2016, 9, 29, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'n2',
      'image_slug' => '2.JPG',
      'tittle' => 'Convívio de início de época',
      'published_at' => Carbon::create(2016, 9, 29, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'n3',
      'image_slug' => '3.JPG',
      'tittle' => 'Seniores Femininos estão de volta',
      'published_at' => Carbon::create(2016, 9, 29, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'n4',
      'image_slug' => '4.JPG',
      'tittle' => 'Francisco Mota reforça a equipa Sénior Masculina',
      'published_at' => Carbon::create(2016, 9, 29, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'n7',
      'image_slug' => '7.JPG',
      'tittle' => 'Início da Competição Oficial',
      'published_at' => Carbon::create(2016, 9, 29, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'resultados_da_semana_2016_10_02',
      'image_slug' => 'Resultados.jpg',
      'tittle' => 'Resultados da semana',
      'description' => 'De 30/09/2016 a 02/10/2016',
      'published_at' => Carbon::create(2016, 10, 3, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'melhoria_infraestruturas',
      'image_slug' => 'melhoria_infraestruturas.jpg',
      'tittle' => 'Melhoria das infraestruturas do Sangalhos',
      'published_at' => Carbon::create(2016, 10, 5, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'fotografia_familia',
      'image_slug' => 'fotografia_familia.jpg',
      'tittle' => 'Fotografia de família - 15 de outubro',
      'published_at' => Carbon::create(2016, 10, 9, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'resultados_da_semana_2016_10_09',
      'image_slug' => 'Resultados.jpg',
      'tittle' => 'Resultados da semana',
      'description' => 'De 05/10/2016 a 09/10/2016',
      'published_at' => Carbon::create(2016, 10, 9, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'agenda20161016',
      'image_slug' => 'agenda20161016.jpg',
      'tittle' => 'Agenda para o fim de semana',
      'published_at' => Carbon::create(2016, 10, 12, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'entrevista_francisco_gradeco',
      'image_slug' => 'entrevista_francisco_gradeco.jpg',
      'tittle' => 'Entrevista a Francisco Gradeço',
      'published_at' => Carbon::create(2016, 10, 12, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'resultados_da_semana_2016_10_16',
      'image_slug' => 'Resultados.jpg',
      'tittle' => 'Resultados da semana',
      'published_at' => Carbon::create(2016, 10, 16, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'cronica_20161016',
      'image_slug' => 'cronica_20161016.jpg',
      'tittle' => 'Sangalhos vence no arranque da Proliga',
      'published_at' => Carbon::create(2016, 10, 18, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'resumo_20161016',
      'image_slug' => 'resumo_20161016.jpg',
      'tittle' => 'Fim de semana em grande',
      'published_at' => Carbon::create(2016, 10, 18, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_noticia_id,
      'slug' => 'agenda_20161023',
      'image_slug' => 'agenda_20161023.jpg',
      'tittle' => 'Agenda da semana',
      'published_at' => Carbon::create(2016, 10, 18, 0, 0, 0, 'Europe/Lisbon'),
    ]);

    Post::create([ 'category_id' => $cat_evento_id,
      'slug' => 'n5',
      'image_slug' => '5.JPG',
      'tittle' => 'Convívio de início de época',
      'published_at' => Carbon::create(2016, 9, 29, 0, 0, 0, 'Europe/Lisbon'),
      'happening_at' => Carbon::create(2016, 9, 18, 0, 0, 0, 'Europe/Lisbon'),
    ]);

    Post::create([ 'category_id' => $cat_galeria_id,
      'slug' => 'n6',
      'image_slug' => '6.1.JPG',
      'tittle' => 'Convívio de início de época',
      'published_at' => Carbon::create(2016, 9, 29, 0, 0, 0, 'Europe/Lisbon'),
      'happening_at' => Carbon::create(2016, 9, 18, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_galeria_id,
      'slug' => 'seniorAMxginasio_20160930',
      'image_slug' => 'IMG_0508.JPG',
      'tittle' => 'Jogo Aliança Sangalhos X Ginásio Casino - Troféu António Pratas Proliga',
      'published_at' => Carbon::create(2016, 10, 7, 0, 0, 0, 'Europe/Lisbon'),
      'happening_at' => Carbon::create(2016, 9, 30, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_galeria_id,
      'slug' => 'sdc_cadetes_B_20161008',
      'image_slug' => 'IMG_1038.JPG',
      'tittle' => 'Jogo Sangalhos B/ Moreira x Centro J Sal Arouca - Campeonato Distrital de Sub16 Masculinos',
      'published_at' => Carbon::create(2016, 10, 11, 0, 0, 0, 'Europe/Lisbon'),
      'happening_at' => Carbon::create(2016, 10, 8, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_galeria_id,
      'slug' => 'sdc_20161015_juniores',
      'image_slug' => 'IMG_9867.JPG',
      'tittle' => 'Jogo Sangalhos DC 29 x 51 A.D. Sanjoanense - Campeonato Distrital de Sub18 Masculinos',
      'published_at' => Carbon::create(2016, 10, 19, 0, 0, 0, 'Europe/Lisbon'),
      'happening_at' => Carbon::create(2016, 10, 15, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_galeria_id,
      'slug' => 'sdc_20161015_cadetes_A',
      'image_slug' => 'IMG_0196.JPG',
      'tittle' => 'Jogo Sangalhos A/ Moreira 51 x 41 GICA - Campeonato Distrital de Sub16 Masculinos',
      'published_at' => Carbon::create(2016, 10, 19, 0, 0, 0, 'Europe/Lisbon'),
      'happening_at' => Carbon::create(2016, 10, 15, 0, 0, 0, 'Europe/Lisbon'),
    ]);
    Post::create([ 'category_id' => $cat_galeria_id,
      'slug' => 'sdc_20161015_seniores_A',
      'image_slug' => 'IMG_0886.JPG',
      'tittle' => 'Jogo Aliança Sangalhos 65 x 56 Guifões S.C. - XIV Campeonato da Proliga',
      'published_at' => Carbon::create(2016, 10, 19, 0, 0, 0, 'Europe/Lisbon'),
      'happening_at' => Carbon::create(2016, 10, 15, 0, 0, 0, 'Europe/Lisbon'),
    ]);

  }
}
