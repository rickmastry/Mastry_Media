<?php get_header();?>


<body id="most">
    <main id="work">
      <h1 class="lg-heading">
          My <span class="text-secondary">Work</span>
      </h1>
      <h2 class="wt-heading">
        <div class="check">
          <p id="wp" >Check out some of my work projects...</p>
        </div>
      </h2>
    
          <?php 
          $workprojectPosts = new WP_Query(array(
            'posts_per_page' => 20,
            'category_name'  => 'Work'
          ));?>
          <div class="projects">
              <?php  while($workprojectPosts-> have_posts()) {
                $workprojectPosts->the_post(); ?>
                
                <div class= "item">
                      <a href="<?php the_field( 'ext_url'); ?>"><?php the_post_thumbnail($id, 'medium', $attr); ?></a>
                      <a href="<?php the_field( 'ext_url'); ?>"target="_blank" class="btn-light"><i class="fa fa-eye"></i><?php the_title(); ?></a> 
                      <a href="https://github.com/" class="btn-dark"><i class="fa fa-github"> Github</i></a> 
                </div>
             
     
                    <?php }

                    ?>
        </div>
    </main>

  <?php  get_footer(); ?>
    
    