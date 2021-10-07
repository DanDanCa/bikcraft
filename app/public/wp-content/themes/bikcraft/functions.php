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
}
