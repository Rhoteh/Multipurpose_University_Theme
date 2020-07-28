<?php

get_header();
pageBanner(array(
  'title' => 'Blog!',
  'subtitle' => 'Lastest News'
));
?>

<div class="container container--narrow page-section">
<?php
 while(have_posts()) {
   the_post(); ?>
    <div class="post-item">
      <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

      <div class="metabox">
          <p>Postd by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
      </div>

      <div class="generic-cotent">
        <?php the_excerpt(); ?>
        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Read More &raquo;</a></p>
      </div>

   </div>
 <?php }
  echo paginate_links();
 ?>

</div>

<?php get_footer();

?>
