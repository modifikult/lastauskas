<?php
    
    /*
        =====================
            Theme support
        =====================
    */
    
    
    /*
        =====================
            Svg and json support
        =====================
    */
    add_filter('upload_mimes', 'svg_upload_allow');
    
    function svg_upload_allow($mimes)
    {
        $mimes['svg'] = 'image/svg+xml';
        
        return $mimes;
    }
    
    add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);
    
    function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
    {
        
        // WP 5.1 +
        if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
            $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
        } else {
            $dosvg = ('.svg' === strtolower(substr($filename, -4)));
        }
        
        if ($dosvg) {
            
            if (current_user_can('manage_options')) {
                
                $data['ext'] = 'svg';
                $data['type'] = 'image/svg+xml';
            } else {
                $data['ext'] = false;
                $data['type'] = false;
            }
            
        }
        
        return $data;
    }
    
    function custom_excerpt_length($length) {
        return 19;
    }
    
    function custom_excerpt_more($more) {
        return '...';
    }
    
    add_filter('excerpt_length', 'custom_excerpt_length');
    add_filter('excerpt_more', 'custom_excerpt_more');
    
//    add_filter('request', 'lastauskast_change_term_request', 1, 1 );
//    
//    function lastauskast_change_term_request($query){
//        
//        $tax_name = 'category'; // specify you taxonomy name here, it can be also 'category' or 'post_tag'
//        
//        if ( !isset($query['attachment']) ) return $query; // to fix bug on localhost
//
//        // Request for child terms differs, we should make an additional check
//        if( $query['attachment'] ) :
//            $include_children = true;
//            $name = $query['attachment'];
//        else:
//            $include_children = false;
//            $name = $query['name'];
//        endif;
//        
//        
//        $term = get_term_by('slug', $name, $tax_name); // get the current term to make sure it exists
//        
//        if (isset($name) && $term && !is_wp_error($term)): // check it here
//            
//            if( $include_children ) {
//                unset($query['attachment']);
//                $parent = $term->parent;
//                while( $parent ) {
//                    $parent_term = get_term( $parent, $tax_name);
//                    $name = $parent_term->slug . '/' . $name;
//                    $parent = $parent_term->parent;
//                }
//            } else {
//                unset($query['name']);
//            }
//            
//            switch( $tax_name ):
//                case 'category':{
//                    $query['category_name'] = $name; // for categories
//                    break;
//                }
//                case 'post_tag':{
//                    $query['tag'] = $name; // for post tags
//                    break;
//                }
//                default:{
//                    $query[$tax_name] = $name; // for another taxonomies
//                    break;
//                }
//            endswitch;
//        
//        endif;
//        
//        return $query;
//        
//    }
//    
//    add_filter( 'term_link', 'lastauskast_term_permalink', 10, 3 );
//    
//    function lastauskast_term_permalink( $url, $term, $taxonomy ){
//        
//        $taxonomy_name = 'Category'; // your taxonomy name here
//        $taxonomy_slug = 'category'; // the taxonomy slug can be different with the taxonomy name (like 'post_tag' and 'tag' )
//        
//        // exit the function if taxonomy slug is not in URL
//        if ( strpos($url, $taxonomy_slug) === FALSE || $taxonomy != $taxonomy_name ) return $url;
//        
//        $url = str_replace('/' . $taxonomy_slug, '', $url);
//        
//        return $url;
//    }
