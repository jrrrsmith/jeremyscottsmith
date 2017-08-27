<?php get_header();?>
<div class="wrap">
<?php while(have_posts()) : the_post(); ?>
  <div class="blog-item">
    <a href="<?php the_permalink(); ?>">
      <h2><?php the_title(); ?></h2>
      <div class="post-meta-box">
        <span class="day"><?php the_time('j') ?></span>
        <span class="month"><?php the_time('F') ?></span>
        <span class="year"><?php the_time('Y') ?></span>
      </div>
      <?php the_content('Read More'); ?>
    </a>
  </div>
<?php endwhile; ?>
</div>
<?php get_footer();?>
