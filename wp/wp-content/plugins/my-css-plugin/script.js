jQuery(document).ready(function($) {
    
    // Handle save course button clicks
    $('.btn-save-course').on('click', function(e) {
        e.preventDefault();
        
        var button = $(this);
        var courseId = button.data('course-id');
        var userProfileId = button.data('user-profile-id');
        
        // Disable button during request
        button.prop('disabled', true);
        
        $.ajax({
            url: myAjax.ajaxurl,
            type: 'POST',
            data: {
                action: 'save_course',
                course_id: courseId,
                user_profile_id: userProfileId,
                nonce: myAjax.nonce
            },
            success: function(response) {
                if (response.success) {
                    // Toggle button state
                    if (response.data.action === 'added') {
                        button.addClass('saved');
                        button.html('💾 Saved');
                    } else {
                        button.removeClass('saved');
                        button.html('🔖 Save Course');
                    }
                    
                    // Show success message (optional)
                    // alert(response.data.message);
                } else {
                    alert('Error: ' + response.data.message);
                }
                
                button.prop('disabled', false);
            },
            error: function() {
                alert('An error occurred. Please try again.');
                button.prop('disabled', false);
            }
        });
    });
    
});
