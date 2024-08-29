<?php get_header()?>



<!-- BANNER -->
<section class="banner bg--dark clr--light">
      <div class="container">
        <div class="banner__wrapper">
          <h1 class="banner__title">The Blog</h1>
          <div class="banner__article">
            <div class="banner__grid">
              <div class="banner__primary">

                <?php $my_query = new WP_Query(array (
                    'post_type' => 'post',
                    'meta_key' => "Grouping",
                    'meta_value' => "FrontBanner",
                ))?>

              <?php if($my_query->have_posts()) : while ($my_query->have_posts()): $my_query->the_post(); ?>

                <div class="card__banner__lg">               
                  <?php if(has_post_thumbnail()) {
                    the_post_thumbnail();
                  }?>
                  
                  <ul class="card__meta flex">
                    <li class="article__date"><?php echo get_the_date('F j, Y');?></li>
                  </ul>
                  <p class="article__excerpt">
                    <?php echo get_the_content()?>
                  </p>
                  <a href="<?php the_permalink()?>" class="article__more">Read More</a>
                </div>
                <?php endwhile;
                else :
                    echo "No More blog";
                endif;
                ?>
              </div>


              <div class="banner__secondary">
                <?php $my_query = new WP_Query(array (
                    'post_type' => 'post',
                    'meta_key' => "Grouping",
                    'meta_value' => "subBanner",
                    'posts_per_page' => -1,
                ))?>

              <?php if($my_query->have_posts()) : while ($my_query->have_posts()): $my_query->the_post(); ?>

                <div class="card__banner__sm">
                  <div class="flex">
                    <?php if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }?>
                    <div class="wrapper">
                      <ul class="card__meta flex">
                        <li class="article__date"><?php echo get_the_date('F j, Y');?></li>
                      </ul>
                      <h3>
                        <?php echo get_the_content()?>
                      </h3>
                      <a href="<?php the_permalink()?>">Read More</a>
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
    </section>

    
    <!-- LATEST -->
    <section class="latest py--10">
      <div class="container">
        <h2>Latest Story</h2>
        <div class="latest__grid">
        
        <?php $my_query = new WP_Query(array (
                'post_type' => 'post',
                'meta_key' => "Latest",
                'meta_value' => "Card",
                'posts_per_page' => -1,
         ))?>

        <?php if($my_query->have_posts()) : while ($my_query->have_posts()): $my_query->the_post(); ?>

          <div class="card__single__col">
            <figure class="img__wrapper">
              <?php if(has_post_thumbnail()) {
                        the_post_thumbnail();
                }?>
            </figure>
            <ul class="card__meta flex">
              <li class="article__date"><?php echo get_the_date('F j, Y');?></li>
              <li class="article__category"><?php echo get_the_category()[0]->name;?></li>
            </ul>
            <h3><?php the_title()?></h3>
            <p>
              <?php echo get_the_content()?>
            </p>
            <a href="<?php the_permalink()?>">Read More</a>
          </div>    
          <?php endwhile;
             else :
              echo "No More blog";
            endif;
          ?>  
        </div>
      </div>
    </section>


    <!-- FUTURE NEWS -->
    <section class="feature bg--dark clr--light py--5 text--center">
      <div class="container">
        <h2>Feature News</h2>

         <?php $my_query = new WP_Query(array (
                'post_type' => 'post',
                'meta_key' => "Feature",
                'meta_value' => "News",
         ))?>
        <?php if($my_query->have_posts()) : while ($my_query->have_posts()): $my_query->the_post(); ?>

        <div class="feature__wrapper">
          <h3><?php the_title()?></h3>
          <p>
            <?php echo get_the_content()?>
          </p>
          <a href="<?php the_permalink()?>">Read the full Story</a>
        </div>

        <div class="feature__img">
          <?php if(has_post_thumbnail()) {
                        the_post_thumbnail();
                }?>
        </div>
        <?php endwhile;
             else :
              echo "No More blog";
            endif;
        ?>

      </div>
    </section>

    
    <section class="other py--10">
      <div class="container">
        <div class="other__grid">
          <div class="other__main">

          <?php $my_query = new WP_Query(array (
                'post_type' => 'post',
                'meta_key' => "Other",
                'meta_value' => "Left",
                'posts_per_page' => -1,
          ))?>
          <?php if($my_query->have_posts()) : while ($my_query->have_posts()): $my_query->the_post(); ?>

            <div class="card__two__col">
              <figure>
                <?php if(has_post_thumbnail()) {
                        the_post_thumbnail();
                }?>
              </figure>

              <div class="other__content">
                <ul class="card__meta flex">
                  <li class="article__date"><?php echo get_the_date('F j, Y');?></li>
                </ul>
                <h3>
                  <?php the_title()?>
                </h3>
                <p>
                  <?php echo get_the_content()?>
                </p>
                <a href="<?php the_permalink()?>">Read more</a>
              </div>            
            </div>
            <?php endwhile;
                else :
                echo "No More blog";
                endif;
              ?>
          </div>

          
          <div class="other__side">
            <?php $my_query = new WP_Query(array (
                'post_type' => 'post',
                'meta_key' => "Other",
                'meta_value' => "Right",
                'posts_per_page' => 7,
            ))?>
            <?php if($my_query->have_posts()) : while ($my_query->have_posts()): $my_query->the_post(); ?>

            <div class="card__sidebar">
              <ul class="card__meta flex">
                <li class="article__date"><?php echo get_the_date('F j, Y');?></li>
              </ul>
              <h3>
                <?php the_title()?>
              </h3>
              <a href="<?php the_permalink()?>">Read more</a>
            </div> 
            <?php endwhile;
              else :
               echo "No More blog";
             endif;
             wp_reset_postdata();
          ?>          
          </div>
        </div>
      </div>
    </section>


<?php get_footer()?>