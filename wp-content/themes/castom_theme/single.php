<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package my-first-theme
 */

get_header();
?>
    <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Страница одного поста<span>.</span></h1>

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

            <article class="post">
                <?php the_post();?>
               <div class="entry-header cf">
        
                    <h1><a href="single.html" title=""><?php the_title();?></a></h1>

                    <p class="post-meta">

                        <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y'); ?>
                        </time>
                         /
                        <span class="categories">
                            <?php the_tags( '', $sep = ' / ') ?>
                            By <?php the_author(); ?>
                       </span>

                    </p>
               </div>

               <div class="post-thumb">
                    <?php the_post_thumbnail();?>
               </div>   

               <div class="post-content">
                
                    <?php the_content();?>
               </div>

                <div>
               <?php if ( comments_open() || get_comments_number() ) :
                        comments_template(); 
                    endif; ?>
                </div>

            </article> <!-- post end -->       
            
        </div> <!-- Primary End-->
        <div id="secondary" class="four columns end">
            <?php get_sidebar('page'); ?>
            <?php get_sidebar(); ?>
        </div> <!-- Secondary End-->
      </div>

   </div> <!-- Content End-->

<?php
get_sidebar();
get_footer();




