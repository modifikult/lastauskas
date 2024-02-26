<?php
    
    /**
     * ACF Extended plugin + ACF PRO required
     */
    
    // Banner
    add_filter('acfe/flexible/thumbnail/layout=banner', 'banner_layout_thumbnail', 10, 3);
    function banner_layout_thumbnail($thumbnail, $field, $layout)
    {
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/images/layout-thumbnails/banner.png';
    }
    
    // Clients
    add_filter('acfe/flexible/thumbnail/layout=clients', 'clients_layout_thumbnail', 10, 3);
    function clients_layout_thumbnail($thumbnail, $field, $layout)
    {
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/images/layout-thumbnails/clients.png';
    }
    
    // Color-Content | image
    add_filter('acfe/flexible/thumbnail/layout=color_content_image', 'color_content_image_layout_thumbnail', 10, 3);
    function color_content_image_layout_thumbnail($thumbnail, $field, $layout)
    {
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/images/layout-thumbnails/color_content_image.png';
    }
    
    // Contacts
    add_filter('acfe/flexible/thumbnail/layout=contacts', 'contacts_layout_thumbnail', 10, 3);
    function contacts_layout_thumbnail($thumbnail, $field, $layout)
    {
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/images/layout-thumbnails/contacts.png';
    }
    
    // Image | Content
    add_filter('acfe/flexible/thumbnail/layout=image_content', 'image_content_layout_thumbnail', 10, 3);
    function image_content_layout_thumbnail($thumbnail, $field, $layout)
    {
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/images/layout-thumbnails/image_content.png';
    }
    
    // Image | Text
    add_filter('acfe/flexible/thumbnail/layout=image_text', 'image_text_layout_thumbnail', 10, 3);
    function image_text_layout_thumbnail($thumbnail, $field, $layout)
    {
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/images/layout-thumbnails/image_text.png';
    }
    
    // Programs
    add_filter('acfe/flexible/thumbnail/layout=programs', 'programs_layout_thumbnail', 10, 3);
    function programs_layout_thumbnail($thumbnail, $field, $layout)
    {
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/images/layout-thumbnails/programs.png';
    }
    
    // Reviews
    add_filter('acfe/flexible/thumbnail/layout=reviews', 'reviews_layout_thumbnail', 10, 3);
    function reviews_layout_thumbnail($thumbnail, $field, $layout)
    {
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/images/layout-thumbnails/reviews.png';
    }
    
    // Video blogs
    add_filter('acfe/flexible/thumbnail/layout=video_blogs', 'video_blogs_layout_thumbnail', 10, 3);
    function video_blogs_layout_thumbnail($thumbnail, $field, $layout)
    {
        // Must return an URL or Attachment ID
        return get_template_directory_uri() . '/assets/images/layout-thumbnails/video_blogs.png';
    }