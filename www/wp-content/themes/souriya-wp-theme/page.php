<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <main class="page">
    <h2><?php the_title(); ?></h2>

    <?php the_content('<p class="serif">Lire la suite de cette page &raquo;</p>'); ?>
    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    <h5><?php edit_post_link('Edit', '<p>', '</p>'); ?></h5>
  </main>
      
  <?php endwhile; endif; ?>

<?php get_footer(); ?>