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
 * @package blog-voce-virtual
 *
 * Template Name: Home
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="presentation-section">
        <div class="presentation-grid">
            <div class="presentation-text">
                <div class="presentation-text-flex" data-aos="fade-right" data-aos-duration="2000">
                    <p>Você Virtual</p>
                    <h2>Seja o dono do seu tempo!</h2>
                    <p>Aqui você encontrará tudo sobre carreira, home office, dicas de emprego, bem-estar e muito mais! Acompanhe e aprecie nossos conteúdos feitos com muito carinho e cuidado para você!</p>
                    <a href="#all-posts" id="button-posts">
                        <button>Ver Posts</button>
                    </a>
                </div>

            </div>
            <div class="presentation-image"></div>
        </div>
    </section>

    <section class="recent-posts-section">
        <div class="recent-posts-container center">
            <h2>Posts Recentes</h2>
            <div class="recent-posts">
                <?php
                $recent_args = array(
                    "posts_per_page" => 3,
                    "orderby" => 'date',
                    "order" => 'DESC',
                );
                $recent_posts = new WP_Query($recent_args);

                if ($recent_posts->have_posts()) :
                    while ($recent_posts->have_posts()) :
                        $recent_posts->the_post(); ?>
                        <div data-aos="fade-up" data-aos-duration="1000">
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
                    endwhile;
                endif;
                ?>
            </div>
            <a href="#all-posts" id="goto-all-posts">
                <button>Ver Mais</button>
            </a>
        </div>
    </section>

    <section class="highlight-posts-section">
        <div class="highlight-posts-container center">
            <h2>Destaques</h2>

            <div class="highlight-posts">
                <?php
                $highlight_args = array(
                    'posts_per_page' => 2,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'category_name' => 'destaques',
                );

                $highlight_posts = new WP_Query($highlight_args);

                if ($highlight_posts->have_posts()) :
                    while ($highlight_posts->have_posts()) :
                        $highlight_posts->the_post(); ?>
                        <div data-aos="fade-left" data-aos-duration="1000">
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
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

    <section class="all-posts-section" id="all-posts">
        <div class="all-posts-container center">
            <h2>Todos os Posts</h2>
            <div class="all-posts-gri">
                <div class="all-posts-filter">
                    <div class="recent-posts">
                        <?php
                        $all_args = array(
                            "posts_per_page" => 6,
                            "orderby" => 'date',
                            "order" => 'DESC',
                        );
                        $all_posts = new WP_Query($all_args);

                        if ($all_posts->have_posts()) :
                            while ($all_posts->have_posts()) :
                                $all_posts->the_post(); ?>
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
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <a href="<?php echo get_site_url(); ?>/posts" id="all-posts-button">
                        <button>Ver Todos</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main><!-- #main -->

<?php
get_footer();
