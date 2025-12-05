<?php
/**
 * Template for displaying articles archive
 */
get_header(); ?>

<div class="articles-archive">
    <div class="container">
        <h1 class="page-title">All Articles</h1>
        
        <?php if ( have_posts() ) : ?>
            <div class="articles-list">
                <?php while ( have_posts() ) : the_post(); 
                    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                ?>
                    <article class="article-card">
                        <?php if ($thumbnail) : ?>
                            <div class="article-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>">
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="article-content">
                            <h2 class="article-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            
                            <div class="article-meta">
                                <span class="article-date">📅 <?php echo get_the_date(); ?></span>
                                <span class="article-author">👤 <?php the_author(); ?></span>
                            </div>
                            
                            <div class="article-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="btn btn-read-more">Read More</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <?php the_posts_pagination(); ?>
            
        <?php else : ?>
            <p>No articles found.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
