<?php
/**
 * Template for displaying single user profile
 */
get_header(); ?>

<div class="single-user-profile">
    <div class="container">
        <?php while ( have_posts() ) : the_post(); 
            $user_type = get_field('user_type');
            $profile_pic = get_field('profile_picture');
            $bio = get_field('user_bio');
            $major = get_field('major');
            $department = get_field('department');
            $year = get_field('user_year');
            $student_id = get_field('student_id');
            $office_hours = get_field('office_hours');
            $facebook = get_field('social_facebook');
            $instagram = get_field('social_instagram');
            $linkedin = get_field('social_linkedin');
            $user_name = get_field('name');
        ?>
            <article class="profile-container">
                <div class="profile-header">
                    <div class="profile-avatar-large">
                        <?php if ($profile_pic) : ?>
                            <img src="<?php echo esc_url($profile_pic['url']); ?>" alt="<?php echo esc_attr($user_name); ?>">
                        <?php else : ?>
                            <div class="avatar-placeholder-large">👤</div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="profile-header-info">
                        <h1 class="profile-name"><?php echo $user_name ? esc_html($user_name) : the_title(); ?></h1>
                        
                        <?php if ($user_type) : ?>
                            <span class="user-type-badge-large <?php echo esc_attr($user_type); ?>">
                                <?php echo esc_html(ucfirst($user_type)); ?>
                            </span>
                        <?php endif; ?>
                        
                        <div class="social-links">
                            <?php if ($facebook) : ?>
                                <a href="<?php echo esc_url($facebook); ?>" target="_blank" class="social-link facebook">Facebook</a>
                            <?php endif; ?>
                            <?php if ($instagram) : ?>
                                <a href="<?php echo esc_url($instagram); ?>" target="_blank" class="social-link instagram">Instagram</a>
                            <?php endif; ?>
                            <?php if ($linkedin) : ?>
                                <a href="<?php echo esc_url($linkedin); ?>" target="_blank" class="social-link linkedin">LinkedIn</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <div class="profile-content">
                    <?php if ($bio) : ?>
                        <div class="profile-section">
                            <h2>About</h2>
                            <p><?php echo nl2br(esc_html($bio)); ?></p>
                        </div>
                    <?php endif; ?>
                    
                    <div class="profile-details">
                        <?php if ($user_type === 'student') : ?>
                            <?php if ($major) : ?>
                                <div class="detail-item">
                                    <strong>Major:</strong> <?php echo esc_html($major); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($year) : ?>
                                <div class="detail-item">
                                    <strong>Year:</strong> <?php echo esc_html($year); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($student_id) : ?>
                                <div class="detail-item">
                                    <strong>Student ID:</strong> <?php echo esc_html($student_id); ?>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        
                        <?php if ($user_type === 'teacher') : ?>
                            <?php if ($department) : ?>
                                <div class="detail-item">
                                    <strong>Department:</strong> <?php echo esc_html($department); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($office_hours) : ?>
                                <div class="detail-item">
                                    <strong>Office Hours:</strong> <?php echo esc_html($office_hours); ?>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
