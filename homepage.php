<?php
  // template Name: Home page
?>
<?php get_header(); ?>

<div class="ui vertical masthead segment banner-img" style="background: url(<?php the_field('bg-img')?>)">
  <div class="ui container">
    <div class="ui segment center aligned basic">
        <h1 class="dark-text-shadow"><?php the_field('banner_title');?></h1>
        <div class="caecilia dark light-text-shadow">
          <?php the_field('banner_text');?>
        </div>
        <button class="ui inverted button large basic contactModal"> Kontakta oss </button>
    </div>
      <?php if( have_rows('banner_items') ): ?>
	      <div class="ui three column grid">
	         <?php while( have_rows('banner_items') ): the_row();
            $title = get_sub_field('title');
            $image = get_sub_field('image');
            $link = get_sub_field('link');
        		$description = get_sub_field('description');
            $sub_title = get_sub_field('sub_title');
            $color = get_sub_field('color');
            ?>

        		<div class="column hover">
              <div class="category-decs" style="background: url(<?php echo $image['url']?>);">
          			<?php if( $link ): ?>
          				<a href="<?php echo $link; ?>">
          			<?php endif; ?>
                  <div class="banner-items-content">
                      <h3 class="dark-text-shadow bolder"> <?php echo $title; ?></h3>
                  </div>
          			<?php if( $link ): ?>
          				</a>
          			<?php endif; ?>
              </div>

              <div class="category-post showItem">
                <div class="ui basic center aligned segment ">
                    <?php if( $link ): ?>
                        <h3 class="ui bolder>">
                          <?php echo $title; ?>
                        </h3>
                        <?php if( $description ):?>
                          <?php echo $description; ?>
                        <?php endif;?>
                      <a href="<?php echo $link;?>" class="ui button basic red">
                          Vilken typ lokal har du?
                      </a>
                    <?php endif;?>
                  </div>
                  <!-- <div class="ui basic segment ">
                    <h4 class="ui header"><?php echo $sub_title; ?></h4>
                    <div class="ui divider"></div>
                        <p> Need to go over and talk about this content, structure?</p>
                    <?php while( have_rows('page_links') ): the_row(); ?>
                      <p>Do we want a list item? </p>
                    <?php endwhile;?>
                  </div> -->
                </div>
        		</div>
        	<?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  <div class="hump">
  </div>
</div>
<div class="ui container center aligned text-content-front">
      <h1 class="maked-title-orange"><?php the_field('content_title'); ?></h1>
      <h3> <?php the_field('content_sub_title')?></h3>
      <?php the_field('content_text')?>
      <br/>
      <button type="button" class="ui button large basic red  "> Ränka på Sparandet</button>
</div>

<div class="ui fluid container bg-dark">
    <div class="dark-hump">
    </div>
    <div class="ui container center aligned inverted">
      <h1 class="ui marked-title inverted"> <?php the_field('customer_case_title');?> </h1>
      <?php  if( have_rows('customer_items') ): ?>
        <div class="ui horizontal segments">
          <?php while ( have_rows('customer_items') ): the_row();
                $image = get_sub_field('image');
               ?>
          <div class="ui segment basic">
              <img src="<?php echo $image['url']?>" class="ui circular small image centeredImg" alt="<?php $image['alt']?>">
          </div>
        <?php endwhile;?>
      </div>
      <?php endif;?>
    </div>
</div>

<?php get_footer();?>
