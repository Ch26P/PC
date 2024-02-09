<?php




function theme_PCportofolio()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails', array('post', 'realisations')); //ajout des image de mise en avant dans les post 
    add_theme_support('menus');

    register_nav_menu('header', 'En tete');
    register_nav_menu('footer', 'pied de page');

    // Définir d'autres tailles d'images : 

    add_image_size('hero', 1440, 962, true);
    add_image_size('galerie', 600, 520, true);
}


function theme_PCportofolio_assets()
{

    wp_enqueue_style('PCportofolio-style', get_stylesheet_uri(), array());  //css
/*
    wp_enqueue_script('jquery', "//code.jquery.com/jquery-1.12.0.min.js");
    wp_enqueue_script('modal-contact', get_stylesheet_directory_uri() . '/js/modal_contact.js', [], 1.0, true);

    // Charger des scripts spécifique pour la front page
    if (is_front_page()) {
        wp_enqueue_script(
            'more_pictures',
            get_template_directory_uri() . '/js/script-ajax-front.js',
            ['jquery'],
            '1.0',
            true
        );
    };
    wp_enqueue_script(
        'lightbox-ajax',
        get_template_directory_uri() . '/js/lightbox-ajax.js',
        ['jquery'],
        '1.0',
        true
    );

    wp_enqueue_script(
        'lightbox-in-ajax',
        get_template_directory_uri() . '/js/lightbox_in.js',
        ['jquery'],
        '1.0',
        true
    );
    */
}


function PCportofolio_init()
{


    register_post_type('realisations', [
        'label' => 'Réalisations',
        'public' => true,
        'menu_position' => 2,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => ['thumbnail', 'title', 'revisions', 'post-formats'/*, 'editor', 'author','comments', 'excerpt', , 'page-attributes'*/],
        'show_in_rest' => true,
        'has_archive' => true,

    ]);
}
/*
function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 100,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
*/

add_action('init', 'PCportofolio_init');
add_action('after_setup_theme', 'theme_PCportofolio');
add_action('wp_enqueue_scripts', 'theme_PCportofolio_assets');
?>