<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <main class="single">
    <h2><?php the_title(); ?></h2>
    <p class="date"><?php the_date('d M Y'); ?></p>

    <p>
      <?php the_content('<p class="serif">Lire le reste &raquo;</p>'); ?>
    </p>

    <nav>
      <?php if (get_adjacent_post(false, '', true)): // if there are older posts ?>
        <p>
          <?php previous_post_link('%link', '&larr; %title'); ?>
        </p>
      <?php endif; ?>
      <?php if (get_adjacent_post(false, '', false)): // if there are newer posts ?>
          <p><?php next_post_link('%link', '%title &rarr;'); ?></p>
      <?php endif; ?>
    </nav>
  </main>
<?php endwhile; else: ?>
  <p>Désolé, aucun article correspondant à vos critères.</p>
<?php endif; ?>

<?php get_footer(); ?>