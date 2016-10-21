<?php

use App\Post;
use App\Element;
use App\ContentBreak;
use App\ContentHeader;
use App\ContentHTML;
use App\ContentImage;
use App\ContentLink;
use App\ContentParagraph;
use App\ContentQA;
use Illuminate\Database\Seeder;

class ElementsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
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

  }
}
