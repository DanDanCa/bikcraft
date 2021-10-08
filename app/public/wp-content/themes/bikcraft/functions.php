<?php
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

add_theme_support('menus');

function my_custom_sizes(){
  add_image_size('large', 1400, 380, true);
  add_image_size('medium', 768, 380, true);
}
add_action('after_setup_theme', 'my_custom_sizes');


function get_field($key, $page_id = 0){
  $id = $page_id !== 0 ? $page_id : get_the_ID();

  return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0){
  echo get_field($key, $page_id);
}

add_action('cmb2_admin_init', 'fields_home');
  function fields_home(){
// Introducao
      $intro = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'Introdução',
        'object_types' => ['page', 'post'],
        'show_on' => [
          'key' => 'page-template',
          'value' => 'page-home.php',
        ],
      ]);

      $intro->add_field([
        'name' => 'Título da Introdução',
        'id' => 'titulo_introducao',
        'type' => 'text',
      ]);

      $intro->add_field([
        'name' => 'Quote da Introdução',
        'id' => 'quote_introducao',
        'type' => 'text',
      ]);

      $intro->add_field([
        'name' => 'Citação da Introdução',
        'id' => 'citacao_introducao',
        'type' => 'text',
      ]);
    //fim introdução
    //chamadas
      $chamadas = new_cmb2_box([
        'id' => 'chamadas_box',
        'title' => 'Chamadas',
        'object_types' => ['page', 'post'],
        'show_on' => [
          'key' => 'page-template',
          'value' => 'page-home.php',
        ],
      ]);

      $chamadas->add_field([
        'name' => 'Chamada Produtos',
        'id' => 'chamada_produtos',
        'type' => 'text',
      ]);

      $chamadas->add_field([
        'name' => 'Chamada Portifólio',
        'id' => 'chamada_portifolio',
        'type' => 'text',
      ]);
    //Fim Chamadas
    //Qualidades
    $sobre = new_cmb2_box([
      'id' => 'qualidades_box',
      'title' => 'Qualidades',
      'object_types' => ['page', 'post'],
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-sobre.php',
      ],
    ]);

    $sobre->add_field([
      'name' => 'Imagem Qualidades',
      'id' => 'logo_bikcraft',
      'type' => 'file',
    ]);


    $qualidade = $sobre->add_field([
      'name' => 'Qualidades',
      'id' => 'qualidade',
      'type' => 'group',
      'repeatable' => true,
      'options' => [
        'group_title' => 'Qualidade {#}',
        'add_button' => 'Adicionar Qualidade',
        'sortable' => true,
      ]
    ]);

    $sobre->add_group_field($qualidade,[
      'name' => 'Título',
      'id' => 'titulo',
      'type' => 'text',
    ]);

    $sobre->add_group_field($qualidade,[
      'name' => 'Descrição',
      'id' => 'descricao',
      'type' => 'text',
    ]);
    //Fim chamadas
    //Portifólio
    $portifolio = new_cmb2_box([
      'id' => 'portifolio_box',
      'title' => 'Imagens do portifólio',
      'object_types' => ['page', 'post'],
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-portfolio.php',
      ],
    ]);

    $imagens = $portifolio->add_field([
      'name' => 'Imagens Portifólio',
      'id' => 'imagens_portifolio',
      'type' => 'group',
      'repeatable' => true,
      'options' => [
        'group_title' => 'Carrossel {#}',
        'add_button' => 'Adicionar Página de Carrossel',
        'sortable' => true,
      ]
    ]);

    $portifolio->add_group_field($imagens,[
      'name' => 'Imagem 1',
      'id' => 'imagem1',
      'type' => 'file',
    ]);

    $portifolio->add_group_field($imagens,[
      'name' => 'Imagem 1',
      'id' => 'descricao_imagem1',
      'type' => 'text',
    ]);

    $portifolio->add_group_field($imagens,[
      'name' => 'Imagem 2',
      'id' => 'imagem2',
      'type' => 'file',
    ]);

    $portifolio->add_group_field($imagens,[
      'name' => 'Imagem 2',
      'id' => 'descricao_imagem2',
      'type' => 'text',
    ]);

    $portifolio->add_group_field($imagens,[
      'name' => 'Imagem 3',
      'id' => 'imagem3',
      'type' => 'file',
    ]);

    $portifolio->add_group_field($imagens,[
      'name' => 'Imagem 3',
      'id' => 'descricao_imagem3',
      'type' => 'text',
    ]);
    //Background interno
    $background = new_cmb2_box([
      'id' => 'background_box',
      'title' => 'Imagens backgroud',
      'object_types' => ['page', 'post'],
      'show_on' => [
        'key' => 'page-template',
        'value' => ['page-portfolio.php','page-sobre.php','page-produtos.php','page-contato.php'],
      ],
    ]);

    $background->add_field([
      'name' => 'Imagem Background',
      'id' => 'background_interno',
      'type' => 'file',
    ]);

    $background->add_field([
      'name' => 'Subtítulo',
      'id' => 'subtitulo',
      'type' => 'text',
    ]);
    //backgroud Home
    $home_background = new_cmb2_box([
      'id' => 'background_home_box',
      'title' => 'Imagem do backgroud',
      'object_types' => ['page', 'post'],
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-home.php',
      ],
    ]);

    $home_background->add_field([
      'name' => 'Imagem Background',
      'id' => 'background_home',
      'type' => 'file',
    ]);
    //sobre - missao
    $empresa = new_cmb2_box([
      'id' => 'empresa_box',
      'title' => 'Informações da Empresa',
      'object_types' => ['page', 'post'],
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-sobre.php',
      ],
    ]);

    $empresa->add_field([
      'name' => 'História, Missão, Visão',
      'id' => 'missao',
      'type' => 'textarea',
    ]);

    $empresa->add_field([
      'name' => 'Valores',
      'id' => 'valores',
      'type' => 'wysiwyg',
    ]);

    $empresa->add_field([
      'name' => 'Imagem da equipe',
      'id' => 'imagem_equipe',
      'type' => 'file',
    ]);
    //quotes
    $quote = new_cmb2_box([
      'id' => 'quote_box',
      'title' => 'Citações',
      'object_types' => ['page', 'post'],
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-portfolio.php',
      ],
    ]);

    $citacoes = $quote->add_field([
      'name' => 'Citações',
      'id' => 'citacoes_portfolio',
      'type' => 'group',
      'repeatable' => true,
      'options' => [
        'group_title' => 'Citações {#}',
        'add_button' => 'Adicionar portfólio',
        'sortable' => true,
      ]
    ]);

    $quote->add_group_field($citacoes,[
      'name' => 'Citação',
      'id' => 'quote',
      'type' => 'text',
    ]);
    $quote->add_group_field($citacoes,[
      'name' => 'Criador da Citação',
      'id' => 'nome_quote',
      'type' => 'text',
    ]);
}
