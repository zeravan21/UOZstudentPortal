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
                    $course_title = get_field('course_title'); 
                    $course_image = get_field('course_image');
                ?>
                    <div class="course-card">
                        <?php if ($course_image) : ?>
                            <div class="course-image">
                                <img src="<?php echo esc_url($course_image['url']); ?>" alt="<?php echo esc_attr($course_title); ?>">
                            </div>
                        <?php endif; ?>
                        
                        <div class="course-content">
                            <h2 class="course-title">
                                <a href="<?php the_permalink(); ?>"><?php echo $course_title ? esc_html($course_title) : the_title(); ?></a>
                            </h2>
                                
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
