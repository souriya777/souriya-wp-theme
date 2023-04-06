<?php get_header(); ?>

  <aside>
    picture 2 phrases
  </aside>

    <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

    <main>
      
      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent à <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

      <article>
              <?php the_content('&raquo; Plus &raquo;'); ?>
      </article>

    </main>

    <?php endwhile; ?>

    <?php else : ?>

    <h2 class="center">Non trouvé</h2>
    <p class="center">Désolé, mais vous recherchez quelque chose qui n'est pas ici.</p>

    <?php endif; ?>

<?php get_footer(); ?>