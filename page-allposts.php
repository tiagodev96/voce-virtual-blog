<?php

/**
 * Template Name: Todos os Posts
 */

get_header();
?>
<header class="allposts-header">
    <h1>Posts</h1>
</header>

<main>
    <div class="allposts">
        <div class="each-post">
            <?php
            $ourCurrentPage = get_query_var('paged');
            $allposts_args = array(
                "posts_per_page" => 6,
                "orderby" => 'date',
                "order" => 'DESC',
                "paged" => $ourCurrentPage,
            );
            $allposts_page = new WP_Query($allposts_args);

            if ($allposts_page->have_posts()) :
                while ($allposts_page->have_posts()) :
                    $allposts_page->the_post(); ?>
                    <div>
                        <a href="<?php echo the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url(); ?>" alt=""></a>
                        <div class="post-informations">
                            <p class="post-categories"><?php the_category(', '); ?></p>
                            <a href="<?php echo the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <p><?php echo get_the_date(); ?></p>

                            <div class="read-article-container">
                                <a href="<?php echo get_permalink(); ?>">
                                    <button class="cta">
                                        <span class="hover-underline-animation">Ler Artigo</span>
                                        <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 46 16">
                                            <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(30)"></path>
                                        </svg>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile; ?>

        </div>
        <div class="all-posts-pagination">
        <?php
                echo paginate_links(array(
                    "total" => $allposts_page->max_num_pages
                ));
            endif;
        ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
