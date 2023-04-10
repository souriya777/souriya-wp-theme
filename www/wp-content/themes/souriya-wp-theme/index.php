<?php get_header(); ?>

  <aside>
    <img src="https://lh3.googleusercontent.com/drive-viewer/AAOQEOTZceJd-89lhxJV7QhLpt9awsdmhAVOQp0kOtgGvINOd9z26CFQUs0ZWHSEmgE84JBQU-D9gduP0_825kaVMPiSXQcB=w1167-h944" alt="souriya profil" />
    <div class="text">
      <p>Blog personnel de <a class="cool" href="/a-propos/">Souriya</a>.</p>
      <p>Pensées pour moi-même.</p>
    </div>
  </aside>

    <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

    <main>
      
      <h2><a class="cool" href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent à <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

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