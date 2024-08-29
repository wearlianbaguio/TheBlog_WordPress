<?php get_header()?>

<section class="single__banner bg--dark clr--light py--10">
  <?php $my_query = new WP_Query(array (
                    'post_type' => 'post',
                    'meta_key' => "Single",
                    'meta_value' => "Banner",
                ))?>

      <?php if($my_query->have_posts()) : while ($my_query->have_posts()): $my_query->the_post(); ?>
      <div class="container">

        <div class="single__banner__header flex justify--between align--end">
          <h1>
            <?php the_title()?>
          </h1>
          <ul>
            <li><?php echo get_the_date('F j, Y');?></li>
            <li>By: <?php echo get_the_author_meta('first_name')?></li>
          </ul>
        </div>
        <div class="single__banner__body">
          <?php echo get_the_content()?>
          <?php if(has_post_thumbnail()) {
              the_post_thumbnail();
          }?>
        </div>
        
      </div>
      <?php endwhile;
          else :
          echo "No More blog";
        endif;
      ?> 
    </section>


    <main class="single__article py--10 bg--dark clr--light">
      <?php $my_query = new WP_Query(array (
                    'post_type' => 'post',
                    'meta_key' => "Single",
                    'meta_value' => "Story",
                ))?>
      <?php if($my_query->have_posts()) : while ($my_query->have_posts()): $my_query->the_post(); ?>

      <div class="container">
        <div class="single__article__wrapper">
          <div class="single__article__info bg--light clr--dark">
            <div class="single__article__meta">
              <h4>Category</h4>
              <p><?php echo get_the_category()[0]->name;?></p>
            </div>

            <div class="single__article__meta">
              <h4>Tags</h4>
              <p><?php the_tags()?></p>
            </div>

            <div class="single__article__meta">
              <h4>Author</h4>
              <p>by: <?php echo get_the_author_meta('first_name')?></p>
            </div>

            <div class="single__article__meta">
              <h4>Reading</h4>
              <p><?php echo get_post_meta(get_the_ID(), 'Reading', true)?></p>
            </div>
          </div>

          
          <div class="single__article__body">
            <div class="wrapper">
              <h3>
                <?php the_title()?>
              </h3>
              <p><?php echo get_the_content()?></p>

            <div class="single__navigation mt--10">
              <ul class="flex justify--between">
                <li><?php echo get_previous_post_link('$link', 'Previous')?></li>
                <li><?php echo get_next_post_link('$link', 'Next')?></li>
                <!-- <li><a href="#">Previous Story</a></li>
                <li><a href="#">Next Story</a></li> -->
              </ul>
            </div>
          </div>
          <?php endwhile;
          else :
          echo "No More blog";
        endif;
      ?> 
        </div>
      </div>
    </main>


    <div class="
     bg--dark clr--light">
      <div class="container">
        <div class="single__other__wrapper">
          <div class="single__other__sidebar">
            <?php $my_query = new WP_Query(array (
                    'post_type' => 'post',
                    'meta_key' => "Single",
                    'meta_value' => "sideBar",
                ))?>
      <?php if($my_query->have_posts()) : while ($my_query->have_posts()): $my_query->the_post(); ?>
            <div class="card__sidebar">
              <ul class="card__meta flex">
                <li class="article__date"><?php echo get_the_date('F j, Y');?></li>
              </ul>
              <h3>
                <?php the_title()?>
              </h3>
              <a href="#">Read more</a>
            </div>     
            <?php endwhile;
          else :
          echo "No More blog";
        endif;
      ?> 
          </div>




          <?php $my_query = new WP_Query(array (
                    'post_type' => 'post',
                    'meta_key' => "Single",
                    'meta_value' => "Main",
                ))?>
      <?php if($my_query->have_posts()) : while ($my_query->have_posts()): $my_query->the_post(); ?>
          <div class="single__other__main">
            <div class="card__other">
              <?php if(has_post_thumbnail()) {
              the_post_thumbnail();
          }?>
              <div class="overlay"></div>
              <div class="card__other__body">
                <h3>
                  <?php the_title()?>
                </h3>
                <p>
                  <?php echo get_the_content()?>
                </p>
                <a href="<?php the_permalink()?>">Continue Reading</a>
              </div>
            </div>
          </div>
          <?php endwhile;
          else :
          echo "No More blog";
        endif;
      ?> 
        </div>
      </div>
    </div>



<?php get_footer()?>