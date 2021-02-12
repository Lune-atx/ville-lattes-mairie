<?php

function shortcode_news($atts){

    extract(shortcode_atts(
        array(
             'fond' => get_site_url().'/imgSite/news.jpg'
   ), $atts));
    
    $beginning_news = "<section class=\"lattesNewsSection\"><h2 class=\"lattesNewsSection_title\">Les news <i class=\"fas fa-info-circle lattesNewsSection_icone\"></i></h2><div class=\"lattesNewsSection_newsArea\" style=\"background-image: url('".$fond."')\">";

    $bloc_news = '';
 
    // LOOP
    $args = array(
        'post_type'     => array('news'),
        'posts_per_page' => '4'
    );
    $query = new WP_Query( $args );
    if ($query->have_posts() ){
        while ( $query->have_posts() ){
            $query->the_post(); 

            $bloc_news .="<a href=\"".get_permalink()."\" class=\"lattesNews\">
                            <article>
                                <h4 class=\"lattesNews_title\">".get_the_title()."</h4>
                            </article>
                        </a>";

        }       

    }


    $end_news = "</div><a href=\"#\" class=\"lattesNewsSection_more\"><i class=\"fas fa-plus\"></i> Voir les autres news</a></section>"; 


    return $beginning_news.$bloc_news.$end_news;

}

add_shortcode('news', 'shortcode_news');