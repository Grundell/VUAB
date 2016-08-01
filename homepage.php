<?php
  // template Name: Home page
?>
<?php get_header(); ?>

<div class="ui vertical masthead segment banner-img" style="background: url(<?php the_field('bg-img')?>)">
  <div class="ui container">
    <div class="ui segment center aligned  basic">
        <h1><?php the_field('banner_title');?></h1>
        <p><?php the_field('banner_text');?></p>
    </div>
      <?php if( have_rows('banner_items') ): ?>
	      <div class="ui three column grid">
	         <?php while( have_rows('banner_items') ): the_row();
            $title = get_sub_field('title');
            $image = get_sub_field('image');
            $link = get_sub_field('link');
        		$description = get_sub_field('description');

            $sub_title = get_sub_field('sub_title');
        		?>

        		<div class="column">
              <div class="category-decs" style="background: url(<?php echo $image['url']?>);">
          			<?php if( $link ): ?>
          				<a href="<?php echo $link; ?>">
          			<?php endif; ?>
                  <div class="banner-items-content">
                      <h3> <?php echo $title; ?></h3>
                  </div>
          			<?php if( $link ): ?>
          				</a>
          			<?php endif; ?>
              </div>

              <div class="category-post ">
                <?php if( $link ): ?>
                  <a href="<?php echo $link; ?>">
                    <h3>
                      <?php echo $title; ?>
                    </h3>
                    <?php if($description):?>
                      <?php echo $description; ?>
                    <?php endif;?>
                  </a>
                <?php endif;?>
                </div>
        		</div>
        	<?php endwhile; ?>
        </div>
      <?php endif; ?>

    </div>
  </div>
</div>

<?php get_footer();?>
