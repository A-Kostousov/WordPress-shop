<?php get_header() ?>

 <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Category<span>.</span></h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
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
              
               <?php endwhile; // конец while ?>
                  
                <!-- Pagination -->
                 <?php the_posts_pagination(); ?>

            <?php endif;   // конец if 
            
            ?>
            

         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">

           <?php get_sidebar('page'); ?>

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
               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               <a href="#">lorem</a>
               </span>
               <b><a href="#">2 Days Ago</a></b>
            </li>
         </ul>

         <p class="align-center"><a href="#" class="button">Follow us</a></p>

      </div>

   </section> <!-- Tweets Section End-->

<?php get_footer() ?>
