<?php
$args = ( ! empty( $args ) ) ? $args : false;
if(!$args){
    $args = [
        'post_type'         => 'post',
        'posts_per_page'    => 15,
        'page'              => get_query_var( 'page' ) ? (int) get_query_var( 'page' ) : 1,
    ];
}
/**
 * Create query args
 */
$queryArgs = array(
    'post_type' => $args['post_type'],
    'posts_per_page' => -1,
    'paged' => $args['page'],
    'post_status'     => 'publish',
    'date_query' => array(
        array(
            'year'  => $args['year'],
        ),
    ),
);

$posts = get_posts($queryArgs);
$total_posts = count($posts);

$total_pages = ceil($total_posts/$args['posts_per_page']);
$current_page = $args['page'];

if( $total_pages > 1 && $total_posts>$args['posts_per_page']):  
?>
    <div class="archive-pagination js-archive-pagination pagination_block">

        <nav class="navigation pagination" aria-label="Posts">

            <div class="container">

                <div class="d-flex justify-content-center nav-links">

                    <a href="?page=<?php echo $current_page-1; ?>" data-page="<?php echo $current_page-1; ?>" class="archive-pagination__btn pagination__btn--prev prev archive-pagination__btn--prev js-pagination-page <?php if($current_page == 1) echo 'disabled'; ?>" title="Previous page">
                    
                        <svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.47575 3.90299L0.850252 1.40101C0.751858 1.00743 1.23429 0.734285 1.52115 1.02115L4.21716 3.71716C4.37337 3.87337 4.37337 4.12663 4.21716 4.28284L1.52115 6.97885C1.23429 7.26571 0.751858 6.99257 0.850252 6.59899L1.47575 4.09701C1.49167 4.03332 1.49167 3.96668 1.47575 3.90299Z" fill="#084074"></path></svg>

                    </a>


                        <?php 
                        $html = '';

                        function addButton($page , $current){
                            return '<a href="'.($page).'" class="archive-pagination__item__link js-pagination-page '.(($page==$current)?"current page-numbers":"").'" data-page="'.$page.'">'.$page.'</a>';
                        }

                        if ($total_pages <= 7) {
                            for ($i = 1; $i <= $total_pages; $i++) {
                                $html .= addButton($i,$current_page);
                            }
                        } else {
                        
                            // Always print first page button
                            $html .= addButton(1,$current_page);
                        
                            // Print "..." only if currentPage is > 3
                            if ($current_page > 3) {
                                $html .= '<li class="separator">...</li>';
                            }
                        
                            // special case where last page is selected...
                            if ($current_page == $total_pages) {
                                $html .= addButton($current_page - 2,$current_page);
                            }
                        
                            // Print previous number button if currentPage > 2
                            if ($current_page > 2) {
                                $html .= addButton($current_page - 1,$current_page);
                            }
                        
                            //Print current page number button as long as it not the first or last page
                            if ($current_page != 1 && $current_page != $total_pages) {
                                $html .= addButton($current_page,$current_page);
                            }
                        
                            //print next number button if currentPage < lastPage - 1
                            if ($current_page < $total_pages - 1) {
                                $html .= addButton($current_page + 1,$current_page);
                            }
                        
                            // special case where first page is selected...
                            if ($current_page == 1) {
                                $html .= addButton($current_page + 2,$current_page);
                            }
                        
                            //print "..." if currentPage is < lastPage -2
                            if ($current_page < $total_pages - 2) {
                                $html .= '<li class="separator">...</li>';
                            }
                        
                            //Always print last page button if there is more than 1 page
                            $html .= addButton($total_pages,$current_page);
                        }
                        
                        echo $html;
                        
                        ?>

                    


                    <a href="<?php echo $current_page+1; ?>" data-page="<?php echo $current_page+1; ?>" class="pagination__btn archive-pagination__btn archive-pagination__btn--next  js-pagination-page <?php if($current_page == $total_pages) echo 'disabled'; ?>" title="Next page">
                    
                        <svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.47575 3.90299L0.850252 1.40101C0.751858 1.00743 1.23429 0.734285 1.52115 1.02115L4.21716 3.71716C4.37337 3.87337 4.37337 4.12663 4.21716 4.28284L1.52115 6.97885C1.23429 7.26571 0.751858 6.99257 0.850252 6.59899L1.47575 4.09701C1.49167 4.03332 1.49167 3.96668 1.47575 3.90299Z" fill="#084074"></path></svg>

                    </a>

                </div>

            </div>

        </nav>
    </div>
<?php
endif;
?>