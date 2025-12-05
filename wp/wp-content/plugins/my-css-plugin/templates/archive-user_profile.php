<?php
/**
 * Template for displaying user profiles archive
 */
get_header(); ?>

<div class="users-archive">
    <div class="container">
        <h1 class="page-title">All Users</h1>
        
        <?php if ( have_posts() ) : ?>
            <div class="users-grid">
                <?php while ( have_posts() ) : the_post(); 
                    $user_type = get_field('user_type');
                    $profile_pic = get_field('profile_picture');
                    $bio = get_field('user_bio');
                    $major = get_field('user_major');
                    $department = get_field('user_department');
                    $user_name = get_field('name');
                    
                    // DEBUG OUTPUT - Check page source to see these
                    echo '<!-- DEBUG: user_name = "' . $user_name . '" -->';
                    echo '<!-- DEBUG: major = "' . $major . '" -->';
                    echo '<!-- DEBUG: user_type = "' . $user_type . '" -->';
                    echo '<!-- DEBUG: profile_pic exists = ' . ($profile_pic ? 'YES' : 'NO') . ' -->';
                ?>
                    <div class="user-card">
                        <div class="user-avatar">
                            <?php if ($profile_pic) : ?>
                                <img src="<?php echo esc_url($profile_pic['url']); ?>" alt="<?php echo esc_attr($user_name); ?>">
                            <?php else : ?>
                                <div class="avatar-placeholder">👤</div>
                            <?php endif; ?>
                            
                            <?php if ($user_name) : ?>
                                <h2 class="user-name">
                                    <a href="<?php the_permalink(); ?>"><?php echo esc_html($user_name); ?></a>
                                </h2>
                            <?php endif; ?>
                        </div>
                        
                        <div class="user-info">
                            <?php if ($major) : ?>
                                <p class="user-major"><?php echo esc_html($major); ?></p>
                            <?php endif; ?>
                            
                            <?php if ($department) : ?>
                                <p class="user-department"><?php echo esc_html($department); ?></p>
                            <?php endif; ?>
                            
                            <a href="<?php the_permalink(); ?>" class="btn btn-view-profile">View Profile</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            
            <?php the_posts_pagination(); ?>
            
        <?php else : ?>
            <p>No users found.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
