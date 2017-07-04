<?php
//for use in the loop, list 5 post titles related to first tag on current post
$cats = get_the_category($post->ID);
if ($cats) {
    echo '<h3 class="related-post-title">Related Posts</h3>';
    $first_cats = $cats[0]->term_id;
    $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=> 3, // Number of related posts that will be shown.
        'caller_get_posts'=>1
    );
    $my_query = new WP_Query($args); ?>
    
        <div class="container">
            <div class="row">
    <?php if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <div class="col-md-4">
              <?php if(has_post_thumbnail()) { ?>
                  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
               <?php } ?>
               <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><h4><?php the_title(); ?></h4><p><?php the_time('F j, Y'); ?></p></a>
            </div>
    <?php
    endwhile;
    } ?>
            </div>
        </div>
    <?php wp_reset_query();
}
?>