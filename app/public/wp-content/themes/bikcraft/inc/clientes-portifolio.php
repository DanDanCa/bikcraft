<?php $portifolio = get_page_by_title('portifolio')->ID;?>
    <ul class="portfolio_lista rslides_portfolio">
      <?php
        $imagens = get_field('imagens_portifolio', $portifolio);
        if(isset($imagens)){ foreach($imagens as $image) {
      ?>
      <li>
        <div class="grid-8"><img src="<?php echo $image['imagem1'] ?>" alt="<?php echo $image['descricao_imagem1'] ?>"></div>
        <div class="grid-8"><img src="<?php echo $image['imagem2'] ?>" alt="<?php echo $image['descricao_imagem2'] ?>"></div>
        <div class="grid-16"><img src="<?php echo $image['imagem3'] ?>" alt="<?php echo $image['descricao_imagem3'] ?>"></div>

      </li>
      <?php } } ?>
    </ul>
    <?php if(!is_page('portifolio')){ ?>
    <div class="call">
      <p><?php the_field('chamada_portifolio', $portifolio); ?></p>
      <a href="/portifolio/" class="btn">Portfólio</a>
    </div>
  <?php }  ?>
