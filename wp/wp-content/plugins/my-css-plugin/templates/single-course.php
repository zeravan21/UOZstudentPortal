<?php
/**
 * Template for displaying single course
 */
get_header(); ?>

<div class="single-course">
    <div class="container">
        <?php while ( have_posts() ) : the_post(); 
        $short_desc = get_field('description');
            $course_title = get_field('course_title');
            $download_link = get_field('link');
            $course_image = get_field('course_image');
            $course_content = get_field('course_content');
            
            // DEBUG OUTPUT
            echo '<!-- DEBUG: course_title = "' . $course_title . '" -->';
            echo '<!-- DEBUG: download_link = "' . $download_link . '" -->';
            echo '<!-- DEBUG: short_desc = "' . $short_desc . '" -->';
            echo '<!-- DEBUG: course_image exists = ' . ($course_image ? 'YES' : 'NO') . ' -->';
            echo '<!-- DEBUG: course_content = "' . substr($course_content, 0, 50) . '..." -->';
        ?>
            <article class="course-single">
                <!-- Course Header -->
                <div class="course-header">
                    <h1 class="course-title"><?php echo $course_title ? esc_html($course_title) : the_title(); ?></h1>
                    
                    <?php
                    $categories = get_the_terms(get_the_ID(), 'course_category');
                    if ($categories && !is_wp_error($categories)) :
                    ?>
                        <div class="course-categories-top">
                            <?php foreach ($categories as $category) : ?>
                                <span class="category-badge"><?php echo esc_html($category->name); ?></span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Course Image -->
                <?php if ($course_image) : ?>
                    <div class="course-featured-image">
                        <img src="<?php echo esc_url($course_image['url']); ?>" alt="<?php echo esc_attr($course_title); ?>">
                    </div>
                <?php endif; ?>
                
                <!-- Course Info -->
                <div class="course-section course-info">
                    <h2 class="section-title">ℹ️ Course Information</h2>
                    <div class="section-content course-meta-grid">
                        <?php if ($instructor) : ?>
                            <div class="meta-item">
                                <strong>👨‍🏫 Instructor:</strong> <?php echo esc_html($instructor); ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($course_duration) : ?>
                            <div class="meta-item">
                                <strong>⏱️ Duration:</strong> <?php echo esc_html($course_duration); ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($uploader) : ?>
                            <div class="meta-item">
                                <strong>📤 Uploaded by:</strong>
                                <?php 
                                $uploader_name = get_field('name', $uploader->ID);
                                if ($uploader_name) {
                                    echo '<a href="' . get_permalink($uploader->ID) . '">' . esc_html($uploader_name) . '</a>';
                                } else {
                                    echo '<a href="' . get_permalink($uploader->ID) . '">' . get_the_title($uploader->ID) . '</a>';
                                }
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Course Overview -->
                <?php if ($description) : ?>
                    <div class="course-section course-overview">
                        <h2 class="section-title">📚 Course Overview</h2>
                        <div class="section-content">
                            <p><?php echo esc_html($description); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
                
                <!-- Course Content -->
                <?php if ($course_content) : ?>
                    <div class="course-section course-details">
                        <h2 class="section-title">📖 Course Details</h2>
                        <div class="section-content">
                            <?php echo wp_kses_post(nl2br($course_content)); ?>
                        </div>
                    </div>
                <?php endif; ?>
                
                <!-- Download Section -->
                <?php if ($download_link) : ?>
                    <div class="course-section course-download-section">
                        <h2 class="section-title">💾 Get Course Materials</h2>
                        <div class="section-content download-box">
                            <p><strong>Ready to start learning?</strong> Download all course materials including notes, exercises, and resources.</p>
                            <a href="<?php echo esc_url($download_link); ?>" class="btn btn-download-large" target="_blank">
                                📥 Download Course Materials
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </article>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
