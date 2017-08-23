<?php get_header();?>
<div class="wrap">
<?php while(have_posts()) : the_post(); ?>
  <div class="index-body">
    <a href="<?php the_permalink(); ?>">
      <h2><?php the_title(); ?></h2>
    </a>
    <?php the_content('Read More'); ?>
  </div>
<?php endwhile; ?>
</div>
<?php get_footer();?>
