<?php

function lattes_customize_footer_sections( $wp_customize ) {

    $wp_customize->add_section( 'footer', array(
        'title'         => 'Pied de page',
        'priority'      => 150,
        'capability'    => 'edit_theme_options',
        'description'   => 'Modifiez les contacts, horaires et widgets du pied de page',
    ) );
    
    // TIMETABLE    
    $wp_customize->add_setting( 'timetable' , array(
        'default'       => 'Ouvert du lundi au vendredi de 08h00 à 17h00'
    ) );

    $wp_customize->add_control( 
        'timetable_content', 
        array(
        // Indique la section a laquel il est attaché
        'section'       => 'footer',
        // Indique le setting auquel il est attaché
        'settings'      => 'timetable',
        'label'         => 'Horaires',
        'description'   => 'Horaires d\'ouverture et de fermeture de la mairie',
        'type'          => 'textarea'
        ) 
    );

    // TOWNHALL_ADRESS  
    $wp_customize->add_setting( 'townhall_address' , array(
        'default'       => 'Mairie de Lattes Av. de Montpellier 34940 Lattes'
    ) );

    $wp_customize->add_control( 
        'address_content', 
        array(
        // Indique la section a laquel il est attaché
        'section'       => 'footer',
        // Indique le setting auquel il est attaché
        'settings'      => 'townhall_address',
        'label'         => 'Adresse',
        'description'   => 'Adresse de la mairie de Lattes',
        'type'          => 'textarea'
        ) 
    );

    // TOWNHALL_CONTACT 
    $wp_customize->add_setting( 'townahll_contact' , array(
        'default'       => 'Tel : 04.67.99.77.77 Fax : 04.67.99.77.78 Mail : mairie@ville-lattes.fr'
    ) );

    $wp_customize->add_control( 
        'contact_content', 
        array(
        // Indique la section a laquel il est attaché
        'section'       => 'footer',
        // Indique le setting auquel il est attaché
        'settings'      => 'townahll_contact',
        'label'         => 'Contact',
        'description'   => 'Contacts de la mairie de Lattes',
        'type'          => 'textarea'
        ) 
    );

}
add_action( 'customize_register', 'lattes_customize_footer_sections' );