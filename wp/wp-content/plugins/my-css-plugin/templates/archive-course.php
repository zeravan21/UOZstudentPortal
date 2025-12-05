<?php
/**
 * Template for displaying course archive
 */
get_header(); ?>

<div class="courses-archive">
    <div class="container">
        <h1 class="page-title">All Courses</h1>
        
        <?php if ( have_posts() ) : ?>
            <div class="courses-grid">
                <?php while ( have_posts() ) : the_post(); 
                    $download_link = get_field('course_download_link');
                    $short_desc = get_field('course_short_description');
                    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                ?>
                    <div class="course-card">
                        <?php if ($thumbnail) : ?>
                            <div class="course-image">
                                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>">
                            </div>
                        <?php endif; ?>
                        
                        <div class="course-content">
                            <h2 class="course-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            
                            <?php if ($short_desc) : ?>
                                <p class="course-description"><?php echo esc_html($short_desc); ?></p>
                            <?php endif; ?>
                            
                            <div class="course-footer">
                                <a href="<?php the_permalink(); ?>" class="btn btn-view">View Details</a>
                                <?php if ($download_link) : ?>
                                    <a href="<?php echo esc_url($download_link); ?>" class="btn btn-download" target="_blank">Download</a>
                                <?php endif; ?>
                                
                                <?php
                                // Show save button (you'll need to pass current user profile ID)
                                // For now, using a data attribute - you can set this dynamically
                                $current_user_profile_id = 0; // TODO: Get from session/cookie/URL parameter
                                if ($current_user_profile_id) :
                                    $is_saved = is_course_saved(get_the_ID(), $current_user_profile_id);
                                ?>
                                    <button class="btn btn-save-course <?php echo $is_saved ? 'saved' : ''; ?>" 
                                            data-course-id="<?php echo get_the_ID(); ?>" 
                                            data-user-profile-id="<?php echo $current_user_profile_id; ?>">
                                        <?php echo $is_saved ? '💾 Saved' : '🔖 Save Course'; ?>
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            
            <?php the_posts_pagination(); ?>
            
        <?php else : ?>
            <p>No courses found.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
