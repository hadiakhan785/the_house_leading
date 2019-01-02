<?php

get_header();
the_post();


// vars
$location = get_field('location');
$thumbnail = get_field('thumbnail');

?>
<div class="single-post-container">
    <div class="container">
      <!-- Card 1 End-->
      <div class="single-post">
                <div class="card-head">
                  <?php the_post_thumbnail()?>
                </div>

                <div class="card-body">
                  <h5 class="post-title"><?php the_title(); ?></h5>
                  <p class="location">
                    <i class="icon-hl-gps"></i> <?php echo the_field('street_address') ?>, <?php echo the_field('city_name') ?>, <?php echo the_field('country__select') ?>
                  </p>

                  

                  
                  <div class="further-detail">
                  <div class="bathroom post-details">
                    <p>
                     <span class="detail-title">Bathroom:</span>
                     <span class="bathroom-quantity"> <?php echo the_field('washrooms'); ?></span>
                     
                     
                    </p>                    
                  </div>

                  <div class="bedroom post-details">
                    <p>
                    <span class="detail-title">Bedroom:</span>
                      <span class="rooms-quantity"><?php echo the_field('rooms'); ?></span>
                      
                    </p>
                   
                  </div>
                  <div class="space post-details">
                    <p>
                    <span class="detail-title">Area: </span>
                    <span class="space-measurement"><?php echo the_field('area_unit');?> sq yd</span>
                     
                    </p>       
                  </div>



                  <div class="post-details">
                    <p>
                    <span class="detail-title"> Price:</span>
                      
                      <span class="product-price">$<?php echo the_field('cost_of_the_house') ?></span>
                      
                    </p>       
                  </div>
                    
                  <div class="category post-details">
                    <p class="category-title">
                    <span class="detail-title">Category:</span>
                      
                    </p>
                      <?php the_category();?>
                            
                  </div>
                  </div>
                  
                  <div class="further-description">
                  <div class="description"> 
										<?php the_content(); ?>
                  </div>
                  <div class='author-contact'>
                    <h4 class="title">CONTACT</h4>
                    <div class="contact">
                    <div>
                      <h5>Name : <?php the_author(); ?></h5>
                      <h5>Number : <?php echo the_field('contact') ?></h5>
                    </div>
                  </div>
                  </div>
                  
                  
                    <!-- <button class="btn-secndry booknow">
                      BOOK NOW
                    </button> -->
                  
                </div>  
              </div>
            </div>
             <!-- Card 1 End -->
    </div>
  </div>

<?php get_footer(); ?>