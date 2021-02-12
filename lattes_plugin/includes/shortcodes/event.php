<?php

function shortcode_event($atts){

    extract(shortcode_atts(
        array(
             'fond' => get_site_url().'/imgSite/event.png'
   ), $atts));

    $style = "<style scoped>.lattes_agendaSection::after{background-image: url('".$fond."');}</style>";
    
    $beginning_event = "<section class=\"lattes_agendaSection\"><h2 class=\"lattes_agendaSection_title\">L'Agenda</h2>";

    $bloc_event = ''; 
    // LOOP pour créer un un string de tout les events
    $args = array(
        'post_type'         => array('event'),
        'posts_per_page'    => '6'
    );
    $query = new WP_Query( $args );
    if ($query->have_posts() ){
        while ( $query->have_posts() ){
            $query->the_post(); 
            $bloc_event .="<a href=\"".get_permalink()."\" class=\"lattes_event\" style=\"background-image: url('".get_the_post_thumbnail_url()."')\">
                                <article class=\"lattes_event_content\">
                                    <h4 class=\"lattes_event_content_title\">".get_the_title()."</h4>
                                    <p class=\"lattes_event_content_date\">".get_the_date()."</p>
                                </article>
                            </a>";
        }  
    }


    $end_event = "<a href=".get_post_type_archive_link("event")." class=\"lattes_agendaSection_more\"><i class=\"fas fa-plus\"></i> Voir les autres évènements</a></section>"; 


    return $style.$beginning_event.$bloc_event.$end_event;

}

add_shortcode('agenda', 'shortcode_event');