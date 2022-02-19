
<h1>archive.php</h1>
<?php

  if (have_posts()) {
    while (have_posts()) {
      the_post();

    ?>
      <h1><a href="<?php the_permalink() ?>"><?= the_title(); ?></a></h1>
      <?php the_author_posts_link() ?>
      <?php echo get_the_category_list( ',' ) ?>
      <p><?= the_content(); ?></p>

    <?php  
    }
  } 

?>