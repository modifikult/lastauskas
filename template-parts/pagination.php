<?php
    if (isset($args)) {
        $query = $args['query'];
        
        $total_pages = $query->max_num_pages;
        
        $pagination_args = array(
            'total' => $total_pages,
            'current' => max(1, get_query_var('paged')),
            'prev_text' => '',
            'next_text' => '',
        );
    }
?>

<div class="page--pagination animate fade-in">
    <?php echo paginate_links($pagination_args); ?>
</div>
