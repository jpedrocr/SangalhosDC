<?php

use App\Club;
use App\Name;
use App\Entity;
use Illuminate\Database\Seeder;

class EntitiesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $club = Club::first();

    $name = Name::create([ 'full' => 'Aliança', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'sponsorship',
      'name_id' => $name->id,
      'description' => 'Vinhos de Portugal',
      'image_slug' => 'parceiros-alian%C3%A7a.png',
      'url' => 'http://www.alianca.pt/',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Iberciclo', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'sponsorship',
      'name_id' => $name->id,
      'description' => 'Bicicletas e Acessórios, Lda',
      'image_slug' => 'parceiros-iberciclo.png',
      'url' => 'https://www.facebook.com/Iberciclo-Bicicletas-e-Acess%C3%B3rios-Lda-143374592387860/?fref=ts',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'ValorPneu', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'sponsorship',
      'name_id' => $name->id,
      'description' => 'Um por todos e todos por um ambiente melhor',
      'image_slug' => 'parceiros-valorpneu.png',
      'url' => 'http://www.valorpneu.pt/',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Grupo Pavigrés', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'sponsorship',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-pavigres.png',
      'url' => 'http://pavigres.com/',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Iberocor', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'sponsorship',
      'name_id' => $name->id,
      'description' => '26 anos... a distinguir a qualidade da vulgaridade',
      'image_slug' => 'parceiros-iberocor.png',
      'url' => 'http://www.iberocor.pt/',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Boomereang Transportes', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'sponsorship',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-boomerang.png',
      'url' => null,
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Litoprint', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'sponsorship',
      'name_id' => $name->id,
      'description' => 'Artes Gráficas, Lda',
      'image_slug' => 'parceiros-litoprint.png',
      'url' => 'http://www.litoprint.pt/',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Moreira Congelados', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'sponsorship',
      'name_id' => $name->id,
      'description' => 'Coma peixe português',
      'image_slug' => 'parceiros-moreira.png',
      'url' => 'http://www.congeladosmoreira.com/',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Crédito Agrícola', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'sponsorship',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-creditoagricola.png',
      'url' => 'http://www.creditoagricola.pt/CAI',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'A oficina Rochauto', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'sponsorship',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-rochauto.png',
      'url' => null,
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Rodi', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'sponsorship',
      'name_id' => $name->id,
      'description' => 'Sinks and ideas',
      'image_slug' => 'parceiros-rodi.png',
      'url' => 'http://sinks.rodi.pt/default.aspx?idioma=pt#0',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Tabor', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'sponsorship',
      'name_id' => $name->id,
      'description' => 'Sheet Metal Works',
      'image_slug' => 'parceiros-tabor.png',
      'url' => 'http://tabor.pt/tbr/index.php/pt/',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'SunLive', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'sponsorship',
      'name_id' => $name->id,
      'description' => 'Sangalhos Hotel',
      'image_slug' => 'parceiros-sunlive.png',
      'url' => 'http://sunlive.pt/en/services/sangalhos-inn',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Recer', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'sponsorship',
      'name_id' => $name->id,
      'description' => 'Pavimentos e revestimentos cerâmicos',
      'image_slug' => 'parceiros-recer.png',
      'url' => 'http://www.recer.pt/',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Grupo Tavares', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'sponsorship',
      'name_id' => $name->id,
      'description' => 'Construímos relações com o futuro',
      'image_slug' => 'parceiros-tavares.png',
      'url' => 'http://www.grupotavares.com/',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Municipio de Anadia', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-municipioanadia.png',
      'url' => 'http://www.cm-anadia.pt/',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Junta de Freguesia de Sangalhos', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-jfsangalhos.png',
      'url' => 'http://www.freguesiadesangalhos.eu/',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Mundiag', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => 'Comércio Geral, Importação e Exportação, Lda',
      'image_slug' => 'parceiros-mundiag.png',
      'url' => 'http://www.mundiag.com/',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'HegiSantos', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => 'Produtos de Higiene e Limpeza, Lda',
      'url' => 'http://www.hegisantos.pt/',
      'image_slug' => 'parceiros-hegisantos.png',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Padaria Central', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-central.png',
      'url' => null,
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Belorizonte', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => 'Centro Médico Integrado e Residências Geriatricas',
      'image_slug' => 'parceiros-belorizonte.png',
      'url' => null,
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Doce Café', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-docecafe.png',
      'url' => null,
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Jornal Bairrada', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-jbairrada.png',
      'url' => null,
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Vimeiro', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => 'O Culto da Água',
      'image_slug' => 'parceiros-vimeiro.png',
      'url' => 'http://www.aguadovimeiro.pt/',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Luso', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-luso.png',
      'url' => 'http://www.sociedadeagualuso.pt/pt/.aspx',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Aqua Lata', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => 'Contabilidade, Fiscalidade e Gestão, Lda',
      'image_slug' => 'parceiros-aqualata.png',
      'url' => null,
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Padaria Esperança', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => 'Colocamos no mercado produtos com qualidade superior e de fácil confeção',
      'image_slug' => 'parceiros-esperan%C3%A7a.png',
      'url' => 'http://www.padariaesperanca.com/',
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Flor do Trovisco', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-trovisco.png',
      'url' => null,
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Capitan Pedro', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-capitaopedro.png',
      'url' => null,
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Talho Reis', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-reis.png',
      'url' => null,
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => '100 Chocolate', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-100chocolate.png',
      'url' => null,
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Talho Carrancho', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-carrancho.png',
      'url' => null,
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Cid\'s Bar', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-cid\'sbar.png',
      'url' => null,
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Supermercado Martinho', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-martinho.png',
      'url' => null,
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();

    $name = Name::create([ 'full' => 'Supermercado Bom Preço', ]);
    $entity = Entity::create([
      'club_id' => $club->id,
      'colaboration_type' => 'partnership',
      'name_id' => $name->id,
      'description' => null,
      'image_slug' => 'parceiros-bompre%C3%A7o.png',
      'url' => null,
    ]);
    $name->owner_id = $entity->id; $name->owner_type = 'App\Entity'; $name->save();
  }
}
