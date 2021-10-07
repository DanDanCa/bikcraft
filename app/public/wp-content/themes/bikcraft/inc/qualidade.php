<?php $sobre = get_page_by_title('sobre')->ID;?>
<section class="qualidade container">
  <h2 class="subtitulo">Qualidades</h2>
  <img src="<?php the_field('logo_bikcraft', $sobre);?>" alt="Bikcraft">
  <ul class="qualidade_lista">
    <?php
      $qualidades = get_field('qualidade', $sobre);
      if(isset($qualidades)){ foreach($qualidades as $qualidade) {
    ?>
    <li class="grid-1-3">
      <h3><?php echo $qualidade['titulo'] ?></h3>
      <p><?php echo $qualidade['descricao'] ?></p>
    </li>
    <?php } } ?>
  </ul>
  <?php if (!is_page('sobre')){ ?>
  <div class="call">
    <p>conheça mais a nossa história</p>
    <a href="sobre.html" class="btn btn-preto">Sobre</a>
  </div>
<?php } ?>
</section>
