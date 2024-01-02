<?php 

function ajaxPoint() {
    $team_arr = [];
    if ( isset($_REQUEST) ) {
        check_ajax_referer( 'my_secret_nonce', 'security');
        $search = sanitize_text_field($_REQUEST['search']);
        if($search == 'request-data') {
           
            /* $args = array(
                    'posts_per_page'   => -1,
                    'post_type'     => 'team-members'
                );
                $the_query = new WP_Query($args);
                        
                if( $the_query->have_posts() ): 
                     while( $the_query->have_posts() ) : $the_query->the_post();
        
                    $attributes = [];
                    $id = $the_query->post->ID;
                    $name = get_field('name');
                    $position = get_field('position');
                    $rlc_years = get_field('years_at_rlc');
                    $market_years = get_field('years_in_marketing');
                    $descripters = get_field('attributes');
                    foreach($descripters as $att) {
                        if(strpos($att, ' ') !== false) {
                            $att = implode('_', explode(' ', $att));
                        }
                        array_push($attributes, $att);
                    }
                    //$arr = array($id, $name, $position, $rlc_years, $market_years, $attributes);
                    $arr = array("id" => $id, "name" => $name, "position" => $position, "years" => $rlc_years, "marketing" => $market_years, "attributes" => $attributes);
                    array_push($team_arr, $arr);
                            
                endwhile;
                    
                endif; 

                wp_reset_postdata();  */   
            
            $package = array('package' => 'your return data from ajaxEndpoint.php');
            echo wp_send_json_success($package); 
        }
        else {
            echo wp_send_json_error($package);
        }
    } 
}
add_action('wp_ajax_ajaxPoint','ajaxPoint');
add_action( 'wp_ajax_nopriv_ajaxPoint', 'ajaxPoint' );