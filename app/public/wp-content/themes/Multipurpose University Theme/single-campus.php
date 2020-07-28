<?php get_header();

  while(have_posts()) {
    the_post();
    pageBanner();
    ?>

    <div class="container container--narrow page-section">
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('campus'); ?>">
          <i class="fa fa-home" aria-hidden="true"></i> All Campuses</a>
          <span class="metabox__main">
            <?php the_title(); ?>
          </span>
        </p>
      </div>

      <div class="generic-content"><?php the_content(); ?></div>

      <?php  $mapLocation = get_field('map_location'); ?>
      <div class="acf-map">
         <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
           <h3><?php the_title(); ?></h3>
           <?php echo $mapLocation['address']; ?>
         </div>
      </div>

      <?php

      //LIST STAFFS
      $relatedPrograms= new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'program',
        'orderby' => 'title',
        'order' => 'ASC',
        'meta_query' => array(
          array (
            'key' => 'related_campus',
            'compare' => 'LIKE',
            'value' => '"' . get_the_ID() . '"'
          )
        )
      ));

      if ($relatedPrograms->have_posts()) {
        echo '<hr class="section-break">';
        echo '<br/>';
        echo '<h2 class="headline headline--medium">Programs offered at this Campus</h2>';
        echo '<br/>';


        echo '<ul class="min-list link-list">';
          while($relatedPrograms->have_posts()) {
            $relatedPrograms->the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </li>
            <?php }
            echo '</ul>';
      }


      wp_reset_postdata();

      //LIST EVENTS
        $today = date('Ymd');
          $homepageEvents = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              ),
              array(
                'key' => 'related_programs',
                'compare' => 'LIKE',
                'value' => '"' . get_the_ID() . '"'
              )
            )
          ));

          if ($homepageEvents->have_posts()) {
            echo '<hr class="section-break">';
            echo '<br/>';
            echo '<h2 class="headline headline--medium"><strong>Upcoming ' . get_the_title() . ' Event(s)</strong></h2>';
            echo '<br/>';

              while($homepageEvents->have_posts()) {
                $homepageEvents->the_post();
                get_template_part('template-parts/content', 'event');
              }
          }

         ?>


    </div>

  <?php }

  get_footer();

 ?>
