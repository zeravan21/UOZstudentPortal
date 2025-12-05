<?php
/**
 * Template for displaying single course
 */
get_header(); ?>

<div class="single-course">
    <div class="container">
        <?php while ( have_posts() ) : the_post(); 
            $download_link = get_field('course_download_link');
            $short_desc = get_field('course_short_description');
            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
        ?>
            <article class="course-single">
                <h1 class="course-title"><?php the_title(); ?></h1>
                
                <?php if ($thumbnail) : ?>
                    <div class="course-featured-image">
                        <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>">
                    </div>
                <?php endif; ?>
                
                <?php if ($short_desc) : ?>
                    <div class="course-short-description">
                        <p><?php echo esc_html($short_desc); ?></p>
                    </div>
                <?php endif; ?>
                
                <div class="course-full-content">
                    <?php the_content(); ?>
                </div>
                
                <?php if ($download_link) : ?>
                    <div class="course-download-section">
                        <a href="<?php echo esc_url($download_link); ?>" class="btn btn-download-large" target="_blank">
                            📥 Download Course Materials
                        </a>
                        
                        <?php
                        // Show save button
                        $current_user_profile_id = 0; // TODO: Get from session/cookie/URL parameter
                        if ($current_user_profile_id) :
                            $is_saved = is_course_saved(get_the_ID(), $current_user_profile_id);
                        ?>
                            <button class="btn btn-save-course-large <?php echo $is_saved ? 'saved' : ''; ?>" 
                                    data-course-id="<?php echo get_the_ID(); ?>" 
                                    data-user-profile-id="<?php echo $current_user_profile_id; ?>">
                                <?php echo $is_saved ? '💾 Saved to My List' : '🔖 Save to My List'; ?>
                            </button>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                
                <div class="course-meta">
                    <?php
                    $categories = get_the_terms(get_the_ID(), 'course_category');
                    if ($categories && !is_wp_error($categories)) :
                    ?>
                        <div class="course-categories">
                            <strong>Categories:</strong>
                            <?php foreach ($categories as $category) : ?>
                                <span class="category-tag"><?php echo esc_html($category->name); ?></span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
