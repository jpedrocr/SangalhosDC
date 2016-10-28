<?php

use App\Category;
use App\Post;
use App\Element;
use App\ContentBreak;
use App\ContentHeader;
use App\ContentHTML;
use App\ContentImage;
use App\ContentLink;
use App\ContentParagraph;
use App\ContentQA;
use App\Board;
use App\Club;
use App\Week;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ElementsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // App\Post::where('slug', 'inicio-noticias-slider')->with('elements.content.elements.content')->get()
    $post_id = Post::where('slug', 'inicio-noticias-slider')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\Post', 'content_id' => Post::where(
      'slug', 'entrevista_pedro_maia'
    )->first()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\Post', 'content_id' => Post::where(
      'slug', 'lxviii_taca_de_portugal_masculina'
    )->first()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\Post', 'content_id' => Post::where(
      'slug', 'parceria_fisis'
    )->first()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\Post', 'content_id' => Post::where(
      'slug', 'agenda_20161030'
    )->first()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\Post', 'content_id' => Post::where(
      'slug', 'concentracao_sub10_20161023'
    )->first()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\Post', 'content_id' => Post::where(
      'slug', 'cronica_20161023'
    )->first()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 6,  'content_type' => 'App\Post', 'content_id' => Post::where(
      'slug', 'resultados_da_semana_20161023'
    )->first()->id, ]);

    // App\Post::where('slug', 'inicio-noticias-fixas')->with('elements.content.elements.content')->get()
    $post_id = Post::where('slug', 'inicio-noticias-fixas')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\Post', 'content_id' => Post::where(
      'slug', 'entrevista_luis_cardoso'
    )->first()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\Post', 'content_id' => Post::where(
      'slug', 'n0'
    )->first()->id, ]);

    // App\Post::where('slug', 'inicio-calendario')->with('elements.content.games.team.name')->get()
    $post_id = Post::where('slug', 'inicio-calendario')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\Week', 'content_id' => Week::where(
      'sunday', Carbon::create(2016, 10, 30, 0, 0, 0, 'Europe/Lisbon')
    )->first()->id, ]);

    //  App\Page::where('slug', 'sdc-historia')->with('posts.elements.content')->get()
    $post_id = Post::where('slug', 'sdc-historia')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Fundado em 1 de janeiro de 1940 por um grupo de jovens (Eng.º Arlindo Costa, Dr. Joaquim Seabra Dinis, Arq. Carlos Alberto Ferreira Pinto, Arnaldo da Costa Neves, Eng.º Manuel Augusto Anjos Neves, Nelson Augusto Neves, José Augusto Estima Coelho de Oliveira, Fernando Manuel Neves Veiga, Pompeu Rodrigues Naia, Horácio Rodrigues Mieiro e Ivo Augusto Neves) incentivados pela família Neves, entusiasta da prática do Basquetebol, o SANGALHOS DESPORTO CLUBE foi nessa altura inscrito na Associação de Basquetebol de Aveiro, tendo, ao longo dos anos conquistado diversos títulos regionais e nacionais.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'A par do Basquetebol, nasceu o ciclismo, sendo o primeiro atleta da terra David Silva, seguindo-se depois, entre muitas glórias, 3 voltas a Portugal ganhas por Alves Barbosa e uma por Joaquim Andrade.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Em 1964 é construida a Pista de Ciclismo e em dezembro de 1970 é concluída a construção do pavilhão gimnodesportivo.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Em 1988, por iniciativa do Prof. Francisco Gradeço, nasce em Sangalhos a modalidade de Corfebol, que conquistou em 90/91 e 92/93 o título de Campeão Nacional, em 91/92 o 4º Lugar na Taça dos Campeões Europeus e em 92/93 a Taça de Portugal e o 7º Lugar na Taça dos Campeões Europeus.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Em 1991 o Clube é o agraciado pelo Ministério da Educação Nacional com a Medalha de Bons Serviços Desportivos.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Em 2001, foi atribuído ao clube, pelo Ministério da Juventude e Desporto, o prémio Reconhecer o Mérito, pela ação desenvolvida junto dos jovens praticantes.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 6,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'A 8 de junho de 2013 é inaugurado o Pavilhão novo e requalificado o antigo, passando a denominar-se como Complexo Desportivo de Sangalhos.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 7,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Entre os diversos reconhecimentos que o Sangalhos tem prestado aos seus sócios mais dedicados, destacamos os de Sócio Honorário aos senhores: Manuel Alves Mendes, Ivo Augusto Neves, Dr. Carlos Paiva de Castro e de Sócios de Mérito aos Senhores: Alves Barbosa, Fernando Pinto Gradeço, Feliciano Godinho Neves e Humberto Simões Mendes.',
    ])->id, ]);

    //  App\Page::where('slug', 'sdc-orgaos')->with('posts.elements.content.board_members.person.name')->get()
    $post_id = Post::where('slug', 'sdc-orgaos-direcao')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\Board', 'content_id' => Board::where(
      'description', 'Direção'
    )->first()->id, ]);
    $post_id = Post::where('slug', 'sdc-orgaos-ageral')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\Board', 'content_id' => Board::where(
      'description', 'Assembleia Geral'
    )->first()->id, ]);
    $post_id = Post::where('slug', 'sdc-orgaos-cfiscal')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\Board', 'content_id' => Board::where(
      'description', 'Conselho Fiscal'
    )->first()->id, ]);

    // App\Page::where('slug', 'sdc-datas')->with('posts.elements.content.relevant_events')->get()->toArray()
    $post_id = Post::where('slug', 'sdc-datas')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\Club', 'content_id' => Club::first()->id, ]);

    $post_id = Post::where('slug', 'sdc-estatutos')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Os Estatutos do Sangalhos são o conjunto de regras e princípios que orientam e regulam o funcionamento desta nobre Instituição.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Concretizada a última revisão em 28 de Março de 2015.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentLink', 'content_id' => ContentLink::create([
      'url' => 'https://dre.pt/application/file/2777327',
      'description' => 'Publicação em Diário da República',
      'link_type' => 'external',
    ])->id, ]);

    // App\Page::where('slug', 'sdc-socios')->with('posts.elements.content')->get()->toArray()
    $post_id = Post::where('slug', 'sdc-socios')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Um dos objetivos da direção do clube é o crescimento do número de sócios efetivos.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Pretendemos sensibilizar e envolver cada vez mais os amigos e simpatizantes do Sangalhos, na vida do clube.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Para tal, convidamos todos os sangalhenses, os adeptos e os familiares dos atletas a tornarem-se sócios, apoiando o clube no seu desenvolvimento.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Contamos com o vosso apoio!',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentHTML', 'content_id' => ContentHTML::create([
      'html_content' => 'Para efetuar a sua inscrição preencha a ficha de sócio disponível no link abaixo. Solicitamos que a envie para o e-mail do clube: <a href="mailto:sdc.geral@sapo.pt">sdc.geral@sapo.pt</a>, pedindo os dados para o pagamento das quotas.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Em caso de dúvidas, contacte a Secretaria do clube.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 6,  'content_type' => 'App\ContentLink', 'content_id' => ContentLink::create([
      'url' => './static/docs/sdc_ficha_socio_2016.xlsx',
      'description' => 'Ficha de Sócio 2016',
      'link_type' => 'internal',
    ])->id, ]);

    // App\Page::where('slug', 'equipas')->with('posts.elements.content.seasons.teams')->get()->toArray()
    $post_id = Post::where('slug', 'equipas')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\Club', 'content_id' => Club::first()->id, ]);

    // App\Page::where('slug', 'parcerias')->with('posts.elements.content.sponsors.name', 'posts.elements.content.partners.name')->get()->toArray()
    $post_id = Post::where('slug', 'parcerias-patrocinadores')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\Club', 'content_id' => Club::first()->id, ]);
    $post_id = Post::where('slug', 'parcerias-parceiros')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\Club', 'content_id' => Club::first()->id, ]);

    // App\Page::where('slug', 'produtos')->with('posts.elements.content')->get()->toArray()
    $post_id = Post::where('slug', 'produtos')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentHTML', 'content_id' => ContentHTML::create([
      'html_content' => 'Para informações ou encomendas dos produtos do SDC contacte a secretaria do clube através do e-mail <a href="mailto:sdc.geral@sapo.pt">sdc.geral@sapo.pt</a> ou procure na loja azul, no Complexo Desportivo de Sangalhos.',
      'class' => 'lead'
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create([
      'url' => 'produtos-aventais.jpg',
      'description' => 'Produtos - Aventais',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create([
      'url' => 'produtos-3.jpg',
      'description' => 'Produtos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create([
      'url' => 'produtos-2.jpg',
      'description' => 'Produtos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create([
      'url' => 'produtos-1.jpg',
      'description' => 'Produtos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create([
      'url' => 'produtos-0.jpg',
      'description' => 'Produtos',
    ])->id, ]);

    // App\Page::where('slug', 'contactos')->with('posts.elements.content.contacts.contact_details')->get()->toArray()
    $post_id = Post::where('slug', 'contactos')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\Club', 'content_id' => Club::first()->id, ]);

    // App\Page::where('slug', 'noticias')->with('posts.elements.content.posts.elements.content')->get()->toArray()
    $post_id = Post::where('slug', 'noticias')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\Category', 'content_id' => Category::where(
      'description', 'Notícia'
    )->first()->id, ]);

    // App\Page::where('slug', 'eventos')->with('posts.elements.content.posts.elements.content')->get()->toArray()
    $post_id = Post::where('slug', 'eventos')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\Category', 'content_id' => Category::where(
      'description', 'Evento'
    )->first()->id, ]);

    // App\Page::where('slug', 'galeria')->with('posts.elements.content.posts.elements.content')->get()->toArray()
    $post_id = Post::where('slug', 'galeria')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\Category', 'content_id' => Category::where(
      'description', 'Galeria'
    )->first()->id, ]);

    $post_id = Post::where('slug', 'n0')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Junta-te à família do Sangalhos e vem jogar basquetebol no nosso clube.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Horários dos treinos disponíveis no site.',
    ])->id, ]);

    $post_id = Post::where('slug', 'n1')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Horários dos treinos para a nova época.',
    ])->id, ]);

    $post_id = Post::where('slug', 'n2')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Decorreu no domingo, 18 de setembro, o convívio de início de época do Sangalhos Desporto Clube, que contou com a presença de todas as equipas do clube.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'A tarde começou com o jogo dos Minis e Iniciados Masculinos, seguindo-se as equipas de Cadetes e Seniores Femininos, terminando com os Juniores Masculinos e os Seniores Masculinos A e B.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Foi uma tarde de confraternização entre os atletas e simpatizantes e de apresentação das equipas para a nova época.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'A competição oficial terá início no dia 30 de setembro com o jogo Aliança Sangalhos X Casino Ginásio, do Troféu António Pratas.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Até lá continuam os treinos de todas as equipas. Vem praticar basquetebol no Sangalhos e traz um amigo!',
    ])->id, ]);

    $post_id = Post::where('slug', 'n3')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Depois de um ano de interregno, o Sangalhos Desporto Clube volta a ter equipa de seniores femininos. Com algumas atletas vindas da formação já comprometidas com o novo projeto, bem como outras que já foram seniores ou da formação do clube, mas que interromperam a competição, por formação académica ou outros motivos, o clube está aberto a receber atletas que venham dar um maior contributo à equipa.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'O Sangalhos sempre foi um clube agregador de atletas. Sempre recebeu todos os atletas que quiseram envergar a camisola azul sangalhense, por isso estará aberto a receber quem vier por bem e dê algo de positivo em prol da modalidade. Sejam bem vinda!',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Mauro Santos será o treinador desta equipa, permanecendo como jogador da equipa sénior masculina.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Desejamos muito sucesso neste projeto!',
    ])->id, ]);

    $post_id = Post::where('slug', 'n4')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'O Sangalhos Desporto Clube anuncia com grande satisfação um reforço para a equipa Sénior A. Francisco Mota proveniente do Beira Mar, já jogou no Sangalhos na época 2010/2011 e fará parte da nossa equipa sénior, que competirá na Proliga. Desejamos muitas felicidades e o maior sucesso nesta nova época!',
    ])->id, ]);

    $post_id = Post::where('slug', 'n7')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'A competição oficial começa no próximo fim de semana.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'O primeiro jogo será da equipa sénior masculina, na sexta, integrado no Troféu António Pratas.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Aqui fica a agenda completa das nossas equipas.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Vem apoiar o Sangalhos, contamos com o teu apoio!',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '30/09/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 6,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '21:00 - Aliança Sangalhos x Casino Ginásio - IX Troféu António Pratas - Proliga',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 7,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 8,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '01/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 9,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '16:00 - SC Beira Mar x Sangalhos/Valorpneu - Campeonato Distrital de Sub14 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 10,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '16:30 - AD Sanjoanense x Aliança Sangalhos - IX Troféu António Pratas - Proliga',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 11,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '18:30 - AD Sanjoanense B x Sangalhos DC B - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 12,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 13,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '02/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 14,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '11:00 - AD Sanjoanense x Sangalhos DC - Campeonato Distrital de Sub16 Femininos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 15,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '11:15 - Sangalhos DC x GDG/Óptica Branco - Campeonato Distrital de Sub18 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 16,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '15:00 - SC Beira Mar x Sangalhos DC - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '18:30 - CP Esgueira x Aliança Sangalhos - IX Troféu António Pratas - Proliga',
    ])->id, ]);

    $post_id = Post::where('slug', 'resultados_da_semana_2016_10_02')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '30/09/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '21:00 - Aliança Sangalhos 60 x 65 Casino Ginásio - IX Troféu António Pratas - Proliga',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '01/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '16:00 - SC Beira Mar 102 x 42 Sangalhos/Valorpneu - Campeonato Distrital de Sub14 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 6,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '16:30 - AD Sanjoanense 55 x 48 Aliança Sangalhos - IX Troféu António Pratas - Proliga',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 7,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '18:30 - AD Sanjoanense B 42 x 49 Sangalhos DC B - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 8,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 9,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '02/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 10,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '11:00 - AD Sanjoanense 66 x 39 Sangalhos DC - Campeonato Distrital de Sub16 Femininos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 11,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '11:15 - Sangalhos DC 43 x 65 GDG/Óptica Branco - Campeonato Distrital de Sub18 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 12,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '15:00 - SC Beira Mar 55 x 52 Sangalhos DC - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 13,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '18:30 - CP Esgueira 53 x 50 Aliança Sangalhos - IX Troféu António Pratas - Proliga',
    ])->id, ]);

    $post_id = Post::where('slug', 'melhoria_infraestruturas')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'O Sangalhos tem vindo a melhorar as suas infraestruturas e equipamentos. Esta época renovámos o espaço de convívio, para receber melhor quem nos visita.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Adquirimos um novo sistema de som, para animar os jogos e eventos do clube.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Apetrechámos também a sala de fisioterapia com novos equipamentos, de modo a dar uma resposta mais adequada às lesões dos nossos atletas.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Estas aquisições foram possíveis graças ao apoio da Câmara Municipal de Anadia, de empresas locais e de iniciativas promovidas pelo clube.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Continuamos a trabalhar para melhorar as condições que oferecemos aos nossos atletas, adeptos e visitantes!',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Viva o SANGALHOS!!!',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 6,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create([
      'url' => 'melhoria_infraestruturas1.jpg',
      'description' => 'Produtos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 7,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create([
      'url' => 'melhoria_infraestruturas2.jpg',
      'description' => 'Produtos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 8,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create([
      'url' => 'melhoria_infraestruturas3.jpg',
      'description' => 'Produtos',
    ])->id, ]);

    $post_id = Post::where('slug', 'fotografia_familia')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'No próximo sábado, dia 15 de outubro, irá decorrer durante o dia, no Complexo Desportivo de Sangalhos, a sessão fotográfica do Sangalhos Desporto Clube.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'De manhã serão tiradas as fotografias das equipas do minibasket.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Durante a tarde serão as das equipas Juniores e Cadetes Masculinos, antes dos respetivos jogos.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Às 18h30 haverá lanche partilhado, para o qual pedimos a colaboração com salgados (minis e equipas femininas) e doces (equipas masculinas).',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'De seguida teremos o ponto alto com a fotografia de família, seguindo-se as fotografias das restantes equipas.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'O dia termina em grande com o primeiro jogo dos Seniores Masculinos A, na Proliga, às 21h frente ao Guifões.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 6,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Após a fotografia de família e antes do jogo dos Seniores haverá animação no pavilhão novo com convívio entre os atletas, música e pinturas faciais. ',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 7,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'A Direção apela à participação de todos neste momento importante do clube e convida-vos a ficarem para o jogo dos Seniores, apoiando a nossa equipa!',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 8,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Esperamos por todos no caldeirão azul!',
    ])->id, ]);

    $post_id = Post::where('slug', 'resultados_da_semana_2016_10_09')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '05/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '09:15 - Sangalhos/ Moreira 33 x 34 Atómicos Sport Clube - Campeonato Distrital de Sub16 Femininos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '10:00 - Anadia FC x Sangalhos DC - Campeonato Distrital de Sub18 Masculinos *',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '11:15 - Sangalhos A/ Moreira 68 x 33 GRI Brandoense - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '15:00 - Sangalhos B/ Moreira 55 x 20 UD Oliveirense B - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '08/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '15:00 - Sangalhos B/ Moreira 91 x 24 Centro J Sal Arouca - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '16:30 - GD Gafanha 67 x 32 Sangalhos/ Moreira - Campeonato Distrital de Sub16 Femininos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '21:00 - Nacional Natação 58 x 35 Sangalhos/ Rochauto/ Yeapstore - LI Taça de Portugal Feminina',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 8,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 9,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '09/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '10:00 - Atómicos Sport Clube x Sangalhos/ Moreira - Encontro de Minis Sub10',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '15:00 - UD Oliveirense 53 x 56 Sangalhos A/ Moreira - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '15:00 - Sangalhos DC 68 x 39 UD Oliveirense - Campeonato Distrital de Sub18 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '16:30 - AA Coimbra 71 x 45 Sangalhos B/ Sunlive Group - IV Campeonato Nacional 1.ª Divisão Masculina',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '17:00 - Sangalhos/ Valorpneu 48 x 43 GRI Brandoense - Campeonato Distrital de Sub14 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '* - Não se realizou',
      'class' => 'small',
    ])->id, ]);

    $post_id = Post::where('slug', 'agenda20161016')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Este fim de semana vai haver muita atividade no nosso clube.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'A equipa sénior masculina entra em ação na Proliga, recebendo o Guifões, no sábado à noite.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Durante este dia haverá a sessão fotográfica do clube, com um lanche partilhado.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'As nossas equipas da formação também entram em campo.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Vem apoiar o Sangalhos, contamos com o teu apoio!',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 7,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 8,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '15/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 9,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '15:00 - Sangalhos DC x A.D. Sanjoanense - Campeonato Distrital de Sub18 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 10,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '17:00 - Sangalhos A/ Moreira x GICA - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 11,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '21:00 - Aliança Sangalhos x Guifões S.C. - XIV Campeonato da Proliga',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 12,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 13,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '16/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 14,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '09:15 - Sangalhos/ Valorpneu x GICA - Campeonato Distrital de Sub14 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 15,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '11:00 - ACR Vale de Cambra x Sangalhos B/ Moreira - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 16,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '11:15 - Sangalhos/ Moreira x AD Vagos - Campeonato Distrital de Sub16 Femininos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '17:30 - SC Beira Mar x Sangalhos DC - Campeonato Distrital de Sub18 Masculinos',
    ])->id, ]);

    $post_id = Post::where('slug', 'entrevista_francisco_gradeco')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Este sábado a equipa Sénior Masculina estreia-se no Campeonato da Proliga, defrontando o Guifões, em casa. Francisco Gradeço continua no comando da equipa, ao que junta o cargo de coordenador desportivo das equipas de formação e seniores. Tendo uma dupla função no clube, é imperativo conhecer as suas expectativas e opiniões para esta época.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '1. Quais os objetivos que define para a participação da equipa sénior na Proliga?',
      'answer' => 'A equipa tem como objetivo inicial a manutenção na proliga. Apesar de ser uma tarefa difícil, vai procurar fazê-lo apurando para os 4 primeiros.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '2. Nos últimos anos a equipa tem assegurado a permanência na Proliga e participado no playoff. Quais os fatores que aponta como determinantes para que tal aconteça? ',
      'answer' => 'Desde a época passada, apenas acedem aos play-offs os 2 primeiros do Norte e do Sul. Em dezasseis equipas e face aos recursos que temos, é uma tarefa não impossível, mas de extrema dificuldade. Tal objetivo só faz sentido depois de concretizado o primeiro. Por outro lado, quem parte com objetivos de atingir os play-offs, tem de ter meios e a ambição de subir à Liga Portuguesa de Basquetebol, caso contrário pode acontecer como ao Atlético na última época, subiu à Liga, mas não reunindo os meios necessários, teve de se inscrever no escalão mais baixo.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '3. Quais os pontos fortes da equipa do Sangalhos para esta época? ',
      'answer' => 'Espero que continue a ser a sua organização coletiva, quer na defesa, quer no ataque.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '4. Que balanço faz da participação da equipa no Troféu António Pratas?',
      'answer' => 'Os jogos do Troféu António Pratas, foram encarados como jogos de preparação, onde à semelhança de outros jogos de treino realizados, procurámos gerir a utilização dos 12 jogadores, colocar em prática algumas das coisas que treinámos, mas reservando para o campeonato alguns dos argumentos defensivos e ofensivos que iremos apresentar.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '5. Do que já conhece das equipas adversárias, quais as suas expectativas para o campeonato da Proliga desta época?',
      'answer' => 'Espero uma competição muito equilibrada e disputada. No Norte parece não existir um “ superior adversário” como o Illiabum da época anterior, mas as equipas mantém grande parte da sua estrutura, algumas com bons reforços, portugueses ou estrangeiros. Muitas das equipas vão fazer da agressividade um aspeto determinante e, consequentemente, as arbitragens podem ser um fator muito importante, bem como a forma como as equipas/jogadores reagem a essas situações.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 6,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '6. Enquanto coordenador desportivo da formação e das equipas seniores, tendo em conta a realidade do basquetebol em Sangalhos, que objetivos aponta para esta época e que aspetos gostaria de ver potenciados?',
      'answer' => 'Se encararmos a competição como um fim em si mesma e dessa forma valorizarmos apenas os resultados, poderemos ter alguns desapontamentos. Enquanto Coordenador espero ajudar os treinadores a melhorar as competências dos jogadores e das equipas, espero influenciar decisões, procurar consensos e naturalmente decidir quando assim for necessário, para bem dos atletas, das equipas, do clube. Espero que os treinadores, atletas, dirigentes deem a cada momento o melhor que podem dar em prol da equipa / clube. Os resultados serão uma consequência do talento dos jogadores que compõem as diferentes equipas, do compromisso de todos e da competência do trabalho desenvolvido. Não esquecendo que os pais, com o envolvimento “correto” são igualmente pedras importantes no processo.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 7,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '7. Para finalizar, que mensagem gostaria de deixar aos sangalhenses e adeptos do clube, para que estejam mais presentes no pavilhão?',
      'answer' => 'Na generalidade, todos os que treinam e jogam, trabalham no ou para o Sangalhos, procuram dar o seu melhor. Esta atitude, por si só, deve ser merecedora do apoio e solidariedade de todos os Sangalhenses e demais apoiantes. Criar um “bom ambiente” depende de todos e é um fator determinante para que as pessoas se sintam bem, possam dar o melhor de si e se consigam superar. Gostava que as bancadas estivessem mais preenchidas e com as pessoas a apoiar, incentivar, criando um clima de entusiasmo, mas também de respeito por todos.',
    ])->id, ]);

    $post_id = Post::where('slug', 'resultados_da_semana_2016_10_16')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 7,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 8,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '15/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 9,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '15:00 - Sangalhos DC 29 x 51 A.D. Sanjoanense - Campeonato Distrital de Sub18 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 10,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '17:00 - Sangalhos A/ Moreira 51 x 41 GICA - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 11,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '21:00 - Aliança Sangalhos 65 x 56 Guifões S.C. - XIV Campeonato da Proliga',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 12,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 13,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '16/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 14,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '09:15 - Sangalhos/ Valorpneu 41 x 63 GICA - Campeonato Distrital de Sub14 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 15,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '11:00 - ACR Vale de Cambra 38 x 57 Sangalhos B/ Moreira - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 16,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '11:15 - Sangalhos/ Moreira 49 x 35 AD Vagos - Campeonato Distrital de Sub16 Femininos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '17:30 - SC Beira Mar 71 x 49 Sangalhos DC - Campeonato Distrital de Sub18 Masculinos',
    ])->id, ]);

    $post_id = Post::where('slug', 'cronica_20161016')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 8,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => 'Aliança Sangalhos 65-56 Guifões S.C.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'O Sangalhos recebeu e venceu a equipa do Guifões no arranque do campeonato da Proliga, uma vitória justíssima onde a equipa da casa liderou sempre o marcador.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Com ambas as equipas a defender individual, mas com a equipa forasteira a pressionar campo inteiro, o Sangalhos entrou com muita determinação. Associando boa organização e coesão defensiva, à boa circulação de bola e jogadores no ataque, a equipa sangalhense iniciou a construção da vitória no 1º período, 21-15. ',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'No 2º quarto, aprimorando alguns ajustes defensivos e mantendo a dinâmica ofensiva, a equipa de Gradeço continuou a ampliar a vantagem dominando todos os índices estatísticos, com destaque para os 50% de lançamentos de 2 pontos e especialmente os 70% de triplos (7 em 10).',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Na 2ª parte o Guifões procurou reagir, como lhe competia. Aumentando a agressividade defensiva procurou encurtar distâncias, criando problemas na circulação de bola do ataque bairradino, vencendo o 3º quarto 8-12, o mais "lutado" e menos bem jogado. O Sangalhos chegou aos 47-28, mas permitiu um parcial de 0-10 à equipa nortenha, mas mantendo a liderança 50-38.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'A equipa da casa voltou a entrar melhor no último período (55-38), mas o Guifões não desistiu. Aumentou ainda mais a sua intensidade defensiva, usando mais contacto físico, reduzindo para 59-54. No entanto, nos instantes finais a equipa da casa voltou a controlar melhor o jogo e estabeleceu o resultado final em 65-56.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Numa vitória justa e merecida do Sangalhos, o Mvp foi Bizarro (11 pontos e 8 ressaltos), merecendo igualmente destaque a prestação dos bases Pedro Seabra e Pedro Silva na  1ª parte (19 pontos em conjunto), mas menos bem na liderança do ataque no 2º tempo.',
    ])->id, ]);

    $post_id = Post::where('slug', 'resumo_20161016')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'O passado fim de semana foi repleto de atividades, no Complexo Desportivo de Sangalhos.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Durante o dia de sábado decorreu a sessão fotográfica do clube, com fotografias tiradas às equipas, que culminou com a fotografia de família, ao final da tarde, antecedida do lanche partilhado. Foi um dia de convívio da família sangalhense, que contou com a presença dos atletas, equipas técnicas, familiares e membros da direção do clube. Este dia foi possível graças à colaboração da Inês Calvo (fotografia), a quem agradecemos. ',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Quanto à competição entraram em ação todas as equipas, à exceção dos Seniores Masculinos B e das Seniores Femininas. Estas, terão a sua estreia no Campeonato Nacional II Divisão Feminina, no próximo domingo, em Esgueira.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'As equipas da formação tiveram sortes diferentes. Enquanto os Cadetes Masculinos arrecadaram duas vitórias, os Juniores Masculinos perderam os dois jogos. As Cadetes Femininas alcançaram a primeira vitória esta época, enquanto os Iniciados Masculinos sofreram uma derrota.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'De realçar a estreia positiva dos Seniores Masculinos, na Proliga, tendo recebido e vencido o Guifões.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Pode consultar a agenda dos próximos jogos na página inicial.',
    ])->id, ]);

    $post_id = Post::where('slug', 'agenda_20161023')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'No próximo fim de semana haverá muitos jogos das equipas do Sangalhos.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'A jornada começa na quinta feira, com a deslocação dos Seniores A ao Porto.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'As Seniores Femininas iniciarão a participação no Campeonato Nacional II Divisão, no domingo.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'As equipas de Iniciados e Cadetes também entrarão em campo.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Vem apoiar o Sangalhos, contamos com a tua presença!',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 7,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 8,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '20/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 9,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '21:00 - Dragon Force FC Porto x Aliança Sangalhos - XIV Campeonato da Proliga',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 7,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 8,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '22/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 9,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '15:00 - Sangalhos B/ Moreira x Ovarense B - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 10,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '21:00 - Aliança Sangalhos x Académico FC - XIV Campeonato da Proliga',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 12,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 13,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '23/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 14,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '09:15 - UD Oliveirense x Sangalhos/ Valorpneu - Campeonato Distrital de Sub14 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 15,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '16:30 - Esgueira/ CasaDiamantes x Sangalhos/ Rochauto/ Yeapstore - L Campeonato Nacional II Divisão Feminina',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 16,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '17:30 - GRI Brandoense x Sangalhos DC - Campeonato Distrital de Sub16 Femininos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 17,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '18:30 - GD Gafanha x Sangalhos A/ Moreira - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);

    $post_id = Post::where('slug', 'entrevista_luis_cardoso')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'O minibasquetebol já está em ação no Sangalhos Desporto Clube. Luís Cardoso, que foi atleta durante muitos anos no clube, continua no comando deste escalão, ao que junta o cargo de coordenador desportivo do mesmo. Tendo uma dupla função no clube, é imperativo conhecer as suas expectativas e opiniões para esta época.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '1. O que o levou a aceitar o desafio de continuar à frente do minibasquetebol do Sangalhos Desporto Clube, enquanto treinador e coordenador?',
      'answer' => 'É sempre um prazer acrescido treinar jovens que se encontram a descobrir o basquetebol, pelo que foi natural ter aceitado o convite para continuar no minibasquetebol. Mantenho-me disponível e motivado para coordenar os trabalhos enquanto sentir que existem projetos que se podem concretizar e para os quais considero poder contribuir.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '2. Esta época houve um reforço na equipa técnica que acompanha as equipas do minibasquetebol. Faça-nos uma breve apresentação desses treinadores e monitores.',
      'answer' => 'Para se ter equipas de formação mais competitivas temos de aumentar o número e a qualidade dos nossos atletas mais novos. Este objetivo apenas pode ser atingido caso exista mais e melhores recursos humanos. O reforço na equipa técnica tem de ser visto como uma aposta na melhoria do minibasquetebol que se pratica no Sangalhos Desporto Clube.@@@Petra Santos – Treinadora que já treina os minis do SDC há alguns anos e continuará com o grupo de babies e sub10.@@@Diogo Soares – Treinador que regressa ao minibasquetebol após alguns anos nas equipas masculinas e femininas de formação do SDC. É o responsável pelo grupo de sub12 femininas.@@@Jorge Seabra – Ex-atleta de referência no clube que continua a colaborar com o grupo de minibasquetebol sendo o responsável pelos sub12 masculinos;@@@David Santiago, Miguel Ramos e João Gonçalves são três jovens monitores que apresentam já alguma experiência no trabalho com atletas destas idades. Curiosamente todos começaram a jogar basquetebol comigo nos minis do SDC pelo que o meu conhecimento sobre os seus aspetos técnicos e humanos pesaram nestas escolhas. Irão apoiar os grupos de sub8 e sub10.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '3. Quais os objetivos que define para a o minibasquetebol para a presente época? E que projetos gostaria de concretizar?',
      'answer' => 'Desde que regressei ao minibasquetebol que tracei alguns objetivos, sabendo que os mesmos serão atingidos ao longo de várias épocas. Após 14 meses já concretizámos alguns, tais como: dinamização de um torneio internacional (que contou com 300 participantes de todo o país e também de espanha); criação de uma equipa feminina de sub12; aumento do volume de treino no escalão de sub 12;@@@Para este ano pretendo:@@@– ultrapassar finalmente a fasquia dos 50 praticantes, nunca descurando a necessidade de lhes dar mais formação adequada que os tornem mais competentes na modalidade.@@@– estabelecer um protocolo com um clube de outra região de modo a desenvolver um programa de intercâmbio que possibilite às crianças outro tipo de vivências desportivas e culturais.@@@– estabelecer parcerias com instituições que visem a divulgação da modalidade e naturalmente o aumento dos praticantes.@@@– em termos competitivos gostaria de repetir o torneio de final de época e avançar com a dinamização de um torneio 12h de minibasket.@@@O projeto mais ambicioso que idealizei é o minibasket do Sangalhos D.C. ser itinerante podendo chegar a mais crianças, de outros pontos do concelho, rentabilizando as infraestruturas desportivas que Anadia possuí.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '4. Que pontos fortes considera que o clube apresenta para a prática do basquetebol?',
      'answer' => 'Quando se entra no Complexo Desportivo de Sangalhos nota-se logo que estão reunidas condições materiais para um trabalho de excelência. Acredito ainda que, o corpo técnico que o clube dispõe é uma mais valia para a modalidade.@@@A cada ano se constatam melhorias no Sangalhos Desporto Clube, mantendo-se uma instituição sólida e de claro valor social, com forte capacidade organizativa e de mobilização em torno da mesma.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '5. Que estratégias/atividades aponta para que haja uma maior ligação entre as equipas do minibasquetebol e os restantes escalões do clube?',
      'answer' => 'A ligação vai existindo, desde logo pela presença de atletas de formação no corpo técnico e de outros que colaboram na organização das concentrações, nomeadamente na arbitragem. Mais importante que trabalhar a ligação entre as equipas do Sangalhos Desporto Clube é desenvolver a identificação de cada atleta com a instituição. Quando essa identificação atingir o seu máximo teremos atletas mais responsáveis, assíduos e mais interessados pelas atividades do clube, independentemente a que escalão pertençam.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 6,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '6. É essencial, para a captação de atletas, a cooperação entre o clube, os centros escolares do município e a Câmara Municipal de Anadia. Considera que esta parceria é possível? E de que forma poderá ser implementada?',
      'answer' => 'Claro que esta parceria é possível até porque a mesma é feita em vários municípios e em modalidades distintas.@@@Esse é o grande desafio.@@@Um dos lemas da Câmara Municipal de Anadia é “Anadia apoia o desporto” e de facto o concelho apresenta infraestruturas em quantidade e qualidade suficientes para ser uma região com forte cultura desportiva.@@@O Agrupamento de Escolas de Anadia têm no seu corpo docente inúmeros professores ligados no presente e no passado à modalidade, alguns dos quais com elevadíssima competência no Basquetebol, pelo que podem ser uma escola de referência ao nível da modalidade.@@@O primeiro passo será juntar os responsáveis de cada instituição e encontrar convergências estabelecendo objetivos e responsabilidades de cada interveniente.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 7,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '7. Que mensagem de incentivo gostaria de deixar para que mais crianças se juntassem ao minibasquetbol no nosso clube?',
      'answer' => 'O minibasquetebol é divertido e dinâmico, afastando o praticante do sedentarismo, permitindo o desenvolvimento de diversas destrezas, num ambiente que fomenta a cooperação, autonomia e a sociabilização. No nosso grupo valorizamos a formação pessoal tal como a formação desportiva, contribuindo para o crescimento saudável e confiante do jovem.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 8,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '8. Por fim, gostaria de deixar alguma palavra aos pais/encarregados de educação dos atletas do clube ou futuros atletas? Qual?',
      'answer' => 'Gostaria de realçar o meu agradecimento por acreditarem no papel que o Sangalhos Desporto Clube tem na formação dos seus educandos, bem como, no apoio imprescindível que têm dado ao grupo em todas as atividades desenvolvidas.',
    ])->id, ]);

    $post_id = Post::where('slug', 'resultados_da_semana_20161023')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '20/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '21:00 - Dragon Force FC Porto 63 x 53 Aliança Sangalhos - XIV Campeonato da Proliga',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '22/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '15:00 - Sangalhos B/ Moreira 45 x 54 Ovarense B - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '21:00 - Aliança Sangalhos 64 x 60 Académico FC - XIV Campeonato da Proliga',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 6,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 7,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '23/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 8,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '09:15 - UD Oliveirense 47 x 54 Sangalhos/ Valorpneu - Campeonato Distrital de Sub14 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 9,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '16:30 - Esgueira/ CasaDiamantes 97 x 24 Sangalhos/ Rochauto/ Yeapstore - L Campeonato Nacional II Divisão Feminina',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 10,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '17:30 - GRI Brandoense 47 x 77 Sangalhos DC - Campeonato Distrital de Sub16 Femininos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 11,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '18:30 - GD Gafanha 58 x 53 Sangalhos A/ Moreira - Campeonato Distrital de Sub16 Masculinos',
    ])->id, ]);

    $post_id = Post::where('slug', 'cronica_20161023')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => 'Aliança Sangalhos 64 x 60 Académico FC',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Depois de se ter deslocado ao Porto (Dragon Force FC PORTO) a meio da semana, onde perdeu 63-53, o Sangalhos regressou às vitórias, em casa, derrotando o Académico 64-60.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Com ambas as equipas a defender individual e o adversário a passar para zona nas reposições, a vitória da equipa sangalhense começou a desenhar-se no 1º período (19-12), fruto de uma boa consistência defensiva e do aproveitamento do jogo interior, onde Fonte se destacou com 12 pontos.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'No 2º quarto (18-14) o Académico subiu a sua defesa e procurou corrigir no jogo interior, mas os bairradinos mantiveram-se organizados e ampliaram a vantagem (37-26) até ao intervalo, desta vez através do jogo exterior, destacando-se Mauro com 3 dos 4 triplos.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'No 3º período a equipa de Gradeço soube inverter a tendência dos últimos jogos no quarto e soube resistir à tentativa de reação do adversário (12-12). Foi o período de menor pontuação, muito lutado, onde a equipa nortenha procurou ser mais agressiva condicionando o ataque sangalhense. No entanto a equipa da casa soube sofrer e continuar a defender bem, mantendo-se na liderança 49-38.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'No último período a equipa forasteira aumentou ainda mais a agressividade defensiva (com a permissão da equipa de arbitragem que não assinalou qualquer falta em quase 19 minutos), reduzindo para 51-45. O Sangalhos respondeu com 2 triplos de Mauro repondo 12 pontos de vantagem. Mas o Académico não se entregava. A equipa da casa tinha dificuldades no ataque, cometendo vários erros ofensivos, bem como em parar João Ribeiro nas suas ações de 1x1. O Académico conseguiu um parcial de 0-15 e colocou-se na frente 59-60. A equipa da casa soube reagir positivamente, passou a defender zona adaptada, parando o ataque adversário, e conseguindo um parcial de 5-0, obtendo mais uma vitória justíssima, num jogo que liderou quase sempre.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 6,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Destaque para Fonte, Mvp com 15 pontos e 8 ressaltos, bem acompanhado pela determinação de toda a equipa, onde Mauro (15 pontos) e Seabra (10) também deram um excelente contributo.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 7,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'No próximo sábado pelas 16:30, o Sangalhos desloca-se à Figueira da Foz para defrontar o Ginásio Figueirense.',
    ])->id, ]);

    $post_id = Post::where('slug', 'concentracao_sub10_20161023')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'No passado domingo, a equipa de sub10 do Sangalhos Desporto Clube deslocou-se ao vizinho GICA com doze meninos para assim participar na segunda concentração de minibasquetebol desta temporada.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Numa manhã recheada de basquetebol os nossos sub10 realizaram três jogos contra as duas equipas do GICA e uma do Anadia.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Jogos onde o resultado pouca importa, foi notório o trabalho de equipa e a entreajuda entre todos, dois aspetos muito importantes tanto na formação desportiva como pessoal.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Parabéns a todos.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create(['url' => 'concentracao_sub10_20161023_2.jpg'])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create(['url' => 'concentracao_sub10_20161023_3.jpg'])->id, ]);

    $post_id = Post::where('slug', 'agenda_20161030')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Este fim de semana as várias equipas do clube, com exceção das de cadetes, estarão em competição.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Consulta aqui o calendário de jogos e vem apoiar o Sangalhos!',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '29/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '16:30 - Casino Ginásio - Aliança Sangalhos - XIV Campeonato da Proliga',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '18:30 - SC Beira Mar - Sangalhos DC - Campeonato Distrital de Sub18 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 6,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '21:00 - Sangalhos/ Rochauto/ Yeapstore - CAD / UPCC - L Campeonato Nacional II Divisão Feminina',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 7,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 8,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '30/10/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 9,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '10:00 - Pavilhão do Esgueira - Concentração de Sub12 Femininos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 10,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '10:00 - Pavilhão do Galitos - Concentração de Sub12 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 11,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '15:00 - Sangalhos/ Valorpneu - A.D. Sanjoanense - Campeonato Distrital de Sub14 Masculinos',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 12,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '17:00 - Sangalhos B/ Sunlive Group - CAD-ACB - IV Campeonato Nacional 1.ª Divisão Masculina',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 13,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 14,  'content_type' => 'App\ContentHeader', 'content_id' => ContentHeader::create([
      'content' => '01/11/2016',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 15,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => '15:00 - Sangalhos DC - Ovarense - Campeonato Distrital de Sub18 Masculinos',
    ])->id, ]);

    $post_id = Post::where('slug', 'parceria_fisis')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'O Sangalhos Desporto Clube anuncia a parceria estabelecida com a Fisis - Fisioterapia e bem-estar, em Oliveira do Bairro.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'A missão deste espaço é prestar serviços de saúde altamente personalizados, aliando a fisioterapia ao bem-estar, através da fusão de vários conceitos na área da saúde, fisioterapia e do desporto. A sua equipa pretende mostrar que saúde e bem-estar são dois conceitos envolventes, globais e que se misturam, existindo um trabalho multidisciplar para atingir níveis de excelência.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'A Fisis dispõe de serviços de fisioterapia, nutrição, psicologia, programação neurolinguística e rituais de bem-estar.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Esta parceria destina-se a atletas, pais, treinadores, diretores e sócios do clube.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Conheça aqui as condições desta nova parceria e usufrua dos serviços de excelência deste espaço e da sua jovem e dinâmica equipa.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 6,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create(['url' => 'parceria_fisis_detalhe.png'])->id, ]);

    $post_id = Post::where('slug', 'lxviii_taca_de_portugal_masculina')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Esta semana decorreu no auditório da Federação Portuguesa de Basquetebol, o sorteio da primeira eliminatória da segunda fase da LXVIII Taça de Portugal Masculina.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'A nossa equipa de seniores irá defrontar o Barreirense, em Sangalhos, equipa esta que compete na zona sul da Proliga.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Esta partida irá decorrer no próximo dia 13 de novembro às 17h.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentBreak', 'content_id' => ContentBreak::create()->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentLink', 'content_id' => ContentLink::create([
      'url' => 'http://www.fpb.pt/fpb2014/!site.go?s=1&show=com&id=6217&layout=calendario',
      'description' => 'Consulte o calendário completo.',
      'link_type' => 'external',
      'class' => 'btn btn-primary',
    ])->id, ]);

    $post_id = Post::where('slug', 'entrevista_pedro_maia')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentParagraph', 'content_id' => ContentParagraph::create([
      'content' => 'Damos hoje a conhecer um pouco da história e das ambições do treinador Pedro Maia, que está no clube há vários anos e que dá, esta época, continuidade à equipa de seniores B.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '1. Que motivos o levam a permanecer no Sangalhos Desporto Clube, pela 18ª época consecutiva enquanto treinador?',
      'answer' => 'O principal motivo é o facto de ser natural de Sangalhos. É para mim um orgulho enorme continuar ainda a merecer deste clube, ao fim de sete épocas como atleta, dezoito como treinador, com um intervalo de três (universidade) a confiança no meu trabalho junto dos jovens atletas.@@@Apesar dos vários convites que surgiram ao longo destes anos, nenhum foi capaz de me motivar desportivamente ao ponto de deixar esta grande escola do desporto que tanto amo. A minha ideia como treinador nunca foi a de chegar a uma grande equipa de Seniores. O Sangalhos serviu sempre, ao longo destes anos, a minha ambição, de ser treinador de basquetebol de formação num clube com o ideal de formar jovens atletas.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '2. Quais os objetivos que define para a competição da equipa de seniores masculinos B, nesta época?',
      'answer' => 'O nosso principal objetivo para esta competição é ficar nos quatro primeiros lugares da série Centro, para chegar à segunda fase e manter a equipa na CNB1. Caso isto não se concretize, teremos de ganhar a Taça para manter a nossa posição.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 3,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '3. Quais os pontos fortes da equipa do Sangalhos para esta época? E quais os que gostaria de ultrapassar, para que a equipa se tornasse ainda mais coesa e competitiva?',
      'answer' => 'O principal ponto forte para a nossa equipa de Seniores B para esta época é, claramente, a continuidade de grande parte do núcleo duro do grupo. Apesar da saída de três atletas do cinco: Ricardo, Bernardo e Rodolfo, a chegada de três atletas dos sub-18 e dois jogadores de fora acabou por equilibrar o grupo que continua coeso e com vontade.@@@Ao invés, o facto de ter grande parte da equipa a estudar em universidades leva a que apenas consiga ter o grupo completo para treinar às sextas e aos sábados e, como tal, a qualidade e a intensidade de treino sejam reduzidas. Assim, temos sempre de suplantar estas dificuldades com querer e muita atitude e entreajuda. Estas contrariedades levam-nos por vezes a perder alguma competitividade e coesão.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 4,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '4. Quais os momentos altos que destaca desta equipa, nas últimas épocas?',
      'answer' => 'Estamos juntos há três épocas e o ponto alto foi claramente a conquista da Taça Nacional de Sub-20 há duas épocas atrás. Gostava também de mencionar a vitória na época passada sobre o Olivais Coimbra, equipa com objetivos de subida e que foi em nossa casa, com o nosso público, derrotado com muita qualidade.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 5,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '5. Do que já conhece das equipas adversárias, quais as suas expectativas para o campeonato Nacional da I Divisão desta época?',
      'answer' => 'As expectativas são claras, ficar nos quatro primeiros lugares e apurar para a próxima fase. Do que conheço das equipas adversárias o grupo vai ser muito equilibrado, com a Académica e o Olivais no grupo da frente, seguido por Sangalhos, Gafanha e Conimbricense. A disputa passará por aqui e os jogos em casa serão fundamentais.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 6,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '6. Quais as condições que salienta no nosso clube que poderão cativar mais crianças e jovens para a prática do basquetebol?',
      'answer' => 'O clube tem hoje condições excepcionais para a aprendizagem da modalidade, como nenhum clube no raio de 40 a 50 km tem, mas infelizmente hoje em dia as ofertas desportivas são muitas e variadas e o Sangalhos é apenas um clube de vila pequena, que luta por ter atletas.@@@Se as instalações de qualidade, os treinadores de topo, a história e títulos conquistados não forem o suficiente, os atletas que pensem que o Sangalhos D.C. é o único clube de basquetebol desta Bairrada que tem todos os escalões masculinos e femininos e isso,  tem de ser motivo suficiente para o jovem atleta optar pelo nosso clube.',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 7,  'content_type' => 'App\ContentQA', 'content_id' => ContentQA::create([
      'question' => '7. Para finalizar, que mensagem gostaria de deixar aos sangalhenses e adeptos do clube, para que estejam mais presentes no pavilhão?',
      'answer' => 'Apoiem o nosso clube sempre e não apenas nos momentos de sucesso, o Sangalhos por si só e pelas pessoas que nunca o deixaram cair já é um sucesso!@@@Apareçam e usufruam da dinâmica do clube.@@@Os nossos jovens merecem!',
    ])->id, ]);


    #####################


    $post_id = Post::where('slug', 'n5')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentLink', 'content_id' => ContentLink::create([
      'url' => 'n6',
      'description' => 'Ver Galeria',
      'link_type' => 'post',
    ])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentLink', 'content_id' => ContentLink::create([
      'url' => 'n2',
      'description' => 'Ver Notícia',
      'link_type' => 'post',
    ])->id, ]);

    $post_id = Post::where('slug', 'n6')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create(['url' => '6.1.JPG'])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 1,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create(['url' => '6.2.JPG'])->id, ]);
    Element::create([ 'post_id' => $post_id, 'order' => 2,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create(['url' => '6.3.JPG'])->id, ]);

    $post_id = Post::where('slug', 'seniorAMxginasio_20160930')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create(['url' => 'IMG_0508.JPG'])->id, ]);

    $post_id = Post::where('slug', 'sdc_cadetes_B_20161008')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create(['url' => 'IMG_1038.JPG'])->id, ]);

    $post_id = Post::where('slug', 'sdc_20161015_juniores')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create(['url' => 'IMG_9867.JPG'])->id, ]);

    $post_id = Post::where('slug', 'sdc_20161015_cadetes_A')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create(['url' => 'IMG_0196.JPG'])->id, ]);

    $post_id = Post::where('slug', 'sdc_20161015_seniores_A')->first()->id;
    Element::create([ 'post_id' => $post_id, 'order' => 0,  'content_type' => 'App\ContentImage', 'content_id' => ContentImage::create(['url' => 'IMG_0886.JPG'])->id, ]);

  }
}
