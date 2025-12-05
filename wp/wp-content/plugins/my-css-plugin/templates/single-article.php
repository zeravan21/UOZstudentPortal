<?php
/**
 * Template for displaying single article
 */
get_header(); ?>

<div class="single-article">
    <div class="container">
        <?php while ( have_posts() ) : the_post(); 
            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
        ?>
            <article class="article-single">
                <header class="article-header">
                    <h1 class="article-title"><?php the_title(); ?></h1>
                    
                    <div class="article-meta">
                        <span class="article-date">📅 <?php echo get_the_date(); ?></span>
                        <span class="article-author">👤 <?php the_author(); ?></span>
                    </div>
                </header>
                
                <?php if ($thumbnail) : ?>
                    <div class="article-featured-image">
                        <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>">
                    </div>
                <?php endif; ?>
                
                <div class="article-content">
                    <?php the_content(); ?>
                </div>
                
                <?php if ( comments_open() || get_comments_number() ) : ?>
                    <div class="article-comments">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
            </article>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
