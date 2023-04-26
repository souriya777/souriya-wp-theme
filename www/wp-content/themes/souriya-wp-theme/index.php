<?php get_header(); ?>

  <?php include 'aside.php'; ?>

  <main>
    <?php
    $query = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) as `month`, DAYOFMONTH(post_date) as `dayofmonth`, ID, post_name, post_title, post_excerpt FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY post_date DESC limit 20";
    $key = md5($query);
    $cache = wp_cache_get( 'mp_archives' , 'general');
    if ( !isset( $cache[ $key ] ) ) {
      $arcresults = $wpdb->get_results($query);
      $cache[ $key ] = $arcresults;
      wp_cache_add( 'mp_archives', $cache, 'general' );
    } else {
      $arcresults = $cache[ $key ];
    }
    if ($arcresults) {
      $MONTHS = array(
        1 => "janvier",
        2 => "fevrier",
        3 => "mars",
        4 => "avril",
        5 => "mai",
        6 => "juin",
        7 => "juill",
        8 => "août",
        9 => "septembre",
        10 => "octobre",
        11 => "novembre",
        12 => "décembre",
      );
      foreach ( $arcresults as $arcresult ) {
    ?>
      <article>
        <h2>
          <a href="/<?php echo $arcresult->post_name; ?>">
          <?php echo strip_tags(apply_filters('the_title', $arcresult->post_title)); ?></a>
        </h2>
        <div>
          <?php echo $arcresult->dayofmonth; ?>
          <?php echo $MONTHS[$arcresult->month]; ?>
          <?php echo $arcresult->year; ?>
        </div>
        <p><?php echo $arcresult->post_excerpt; ?></p>
      </article>
    <?php
      }
    }
    ?>
  </main>

<?php get_footer(); ?>