
<h1>single.php</h1>
<?php

  if (have_posts()) {
    while (have_posts()) {
      the_post();

    ?>
      <h1><a href="<?php the_permalink() ?>"><?= the_title(); ?></a></h1>
      <p><?= the_content(); ?></p>

    <?php  
    }
  }

?>