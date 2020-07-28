<?php get_header();

  while(have_posts()) {
    the_post();
    pageBanner();
    ?>

    <div class="container container--narrow page-section">
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('staff'); ?>">
          <i class="fa fa-home" aria-hidden="true"></i> All Staff</a>
          <span class="metabox__main"><?php echo get_the_category_list(', '); ?></span></p>
      </div>

      <div class="generic-content">
        <div class="row group">

          <div class="one-third">
            <?php the_post_thumbnail('staffImgPotrait'); ?>
          </div>

          <div class="two-thirds">
            <?php the_content(); ?>
          </div>
        </div>
      </div>

      <?php

        $relatedPrograms = get_field('related_programs');

        if ($relatedPrograms) {
          echo '<hr class="section-break">';
          echo '<br/>';
          echo '<h2 class="headline headline--medium"><strong>Subject Area(s)</strong></h2>';
          echo '<ul class="link-list min-list">';
          foreach($relatedPrograms as $program) { ?>
            <li><a href="<?php echo get_the_permalink($program);  ?>"><?php echo get_the_title($program); ?></a></li>
          <?php }
          echo '</ul>';
        }

       ?>

    </div>

  <?php }

  get_footer();

 ?>
