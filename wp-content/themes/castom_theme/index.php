    <?php
    /**
    * The main template file
    *
    * This is the most generic template file in a WordPress theme
    * and one of the two required files for a theme (the other being style.css).
    * It is used to display a page when nothing more specific matches a query.
    * E.g., it puts together the home page when no home.php file exists.
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package castom-theme
    */

    get_header();
    ?>

     <section id="intro">

      <!-- Flexslider Start-->
       <div id="intro-slider" class="flexslider">

    	   <ul class="slides">

    		   <!-- Slide -->
    		   <li>
    			   <div class="row">
    				   <div class="twelve columns">
    					   <div class="slider-text">
    						   <h1>Castom Theme<span>.</span></h1>
    						   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
    					   </div>
                     <div class="slider-image">
                        <img src="images/sliders/home-slider-image-01.png" alt="" />
                     </div>
    				   </div>
    			   </div>
    		   </li>

            <!-- Slide -->
    		   <li>
    			   <div class="row">
    				   <div class="twelve columns">
    					   <div class="slider-text">
    						   <h1>Responsive + HTML5 + CSS3<span>.</span></h1>
    						   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    					   </div>
                     <div class="slider-image">
                        <img src="images/sliders/home-slider-image-02.png" alt="" />
                     </div>
    				   </div>
    			   </div>
    		   </li>

    	   </ul>

       </div> <!-- Flexslider End-->

    </section> <!-- Intro Section End-->

    <!-- Info Section
    ================================================== -->
    <section id="info">

      <div class="row">

         <div class="bgrid-quarters s-bgrid-halves">

           <div class="columns">
              <h2>Lorem ipsum dolor sit amet.</h2>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
           </div>

           <div class="columns">
              <h2>Lorem ipsum dolor sit amet.</h2>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
           </div>

           <div class="columns s-first">
              <h2>Lorem ipsum dolor sit amet.</h2>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
           </div>

           <div class="columns">
              <h2>Lorem ipsum dolor sit amet.</h2>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
           </div>

           </div>

      </div>

    </section> <!-- Info Section End-->

    <!-- Works Section
    ================================================== -->
    <section id="works">

      <div class="row">

         <div class="twelve columns align-center">
            <h1>Lorem ipsum dolor sit amet.</h1>
         </div>

         <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-halves">

    		   <div class="columns portfolio-item">
               <div class="item-wrap">
    				   <a href="portfolio.html">
                     <img alt="" src="images/portfolio/geometrics.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="portfolio.html">1</a></h5>
                     <p>1</p>
    					</div>
               </div>
    			</div>

            <div class="columns portfolio-item">
               <div class="item-wrap">
    				   <a href="portfolio.html">
                     <img alt="" src="images/portfolio/console.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="portfolio.html">2</a></h5>
                     <p>2</p>
    					</div>
               </div>
    			</div>

            <div class="columns portfolio-item s-first">
               <div class="item-wrap">
    				   <a href="portfolio.html">
                     <img alt="" src="images/portfolio/camera-man.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="portfolio.html">3</a></h5>
                     <p>3</p>
    					</div>
               </div>
    			</div>

            <div class="columns portfolio-item">
               <div class="item-wrap">
    				   <a href="portfolio.html">
                     <img alt="" src="images/portfolio/into-the-light.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="portfolio.html">4</a></h5>
                     <p>4</p>
    					</div>
               </div>
    			</div>

         </div>

      </div>

    </section> <!-- Works Section End-->

    <!-- Journal Section
    ================================================== -->
    <section id="journal">

      <div class="row">
         <div class="twelve columns align-center">
            <h1>Our latest posts and rants.</h1>
         </div>
      </div>

      <div class="blog-entries">
        
        <?php 
        // параметры по умолчанию
        $posts = get_posts( array(
          'numberposts' => 3,
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        foreach( $posts as $post ){
          setup_postdata($post);
            ?>
              <article class="row entry">

            <div class="entry-header">

               <div class="permalink">
                    <a href="<?php the_permalink();?>"><i class="fa fa-link"></i></a>
               </div>

               <div class="ten columns entry-title pull-right">
                    <h3><a href="<?php the_permalink();?>"><?php the_title(); ?>.</a></h3>
                    <?php the_post_thumbnail();?>
               </div>

               <div class="two columns post-meta end">
                  <p>
                  <time datetime="2014-01-31" class="post-date" pubdate=""><?php the_time('F jS, Y'); ?></time>
                  <span class="dauthor">By <?php the_author(); ?></span>
                  </p>
               </div>

            </div>

            <div class="ten columns offset-2 post-content">
                </br>
                <?php the_excerpt(); ?>
                <a class="more-link" href="<?php the_permalink();?>">Read More<i class="fa fa-arrow-circle-o-right"></i></a>
            </div>

         </article> <!-- Entry End -->
              
        <?php 
        }

        wp_reset_postdata(); // сброс
        ?>
         <!-- Entry -->
         


      </div> <!-- Entries End -->

    </section> <!-- Journal Section End-->

    <?php
    get_footer();

