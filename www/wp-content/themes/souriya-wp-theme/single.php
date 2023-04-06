<?php get_header(); ?>
			<h2><?php the_title(); ?></h2>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<main>

			<?php the_content('<p class="serif">Lire le reste &raquo;</p>'); ?>

			<div class="author">Souriya</h3>
		</main>

		<nav>

			<?php if (get_adjacent_post(false, '', true)): // if there are older posts ?>
    			<p><strong>Publié</strong>: <?php the_date('m.d.Y'); ?></p>
			<p><strong>Précédent billet</strong>: <?php previous_post_link('%link'); ?></p>
			<?php endif; ?>

			<?php if (get_adjacent_post(false, '', false)): // if there are newer posts ?>
    			<p><strong>Prochain billet</strong>: <?php next_post_link('%link'); ?></p>
			<?php endif; ?>

		</nav>

		<?php endwhile; else: ?>

			<p>Désolé, aucun article correspondant à vos critères.</p>

		<?php endif; ?>

		<?php if(comments_open()) : ?>  
			<?php comments_template(); ?>
		<?php else : ?>  
		<?php endif; ?> 

<?php get_footer(); ?>