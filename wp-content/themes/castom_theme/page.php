<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my-first-theme
 */
?>

<?php get_header() ?>

 <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1><?php the_title(); ?><span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">    	

             <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                      <article class="post">

                        <div class="entry-header cf">

                           <h1><a href="<?php get_the_permalink() ?>" title=""><?php the_title (); ?></a></h1>

                           <p class="post-meta">

                           <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y'); ?></time>

                           <span class="categories">
                              <?php the_tags( '', $sep = ' / ') ?>
                     
                           </span>
                          
                           <div class="post-thumb">
                               <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( 'post-thumb' ); ?> </a>
                           </div>   
                           
                           <div class="post-content">

                           <p><?php the_excerpt(); ?> </p>

                           </div>
                        
                     </article>
              
               <?php endwhile;  {
                  # code...
               }; // конец while ?>
                  
                <!-- Pagination -->
                 <?php the_posts_pagination(); ?>

            <?php endif;  // конец if 
            
            ?> <!-- post end -->

            <!-- Pagination -->

            <?php the_posts_pagination(); ?>

         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">

           <?php get_sidebar('page'); ?>
           <?php get_sidebar(); ?>

         </div> <!-- Secondary End-->

      </div>

   </div> <!-- Content End-->

   <!-- Tweets Section
   ================================================== -->
   <section id="tweets">

      <div class="row">

         <div class="tweeter-icon align-center">
            <i class="fa fa-twitter"></i>
         </div>

         <ul id="twitter" class="align-center">
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">2 Days Ago</a></b>
            </li>
         </ul>

         <p class="align-center"><a href="#" class="button">Follow us</a></p>

      </div>

   </section> <!-- Tweets Section End-->

<?php get_footer() ?>
