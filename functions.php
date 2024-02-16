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
    add_image_size('ordi', 646, true);
    add_image_size('tab', 276, true);
    add_image_size('phone', 132, true);
}


function theme_PCportofolio_assets()
{

    wp_enqueue_style('PCportofolio-style', get_stylesheet_uri(), array());  //css

    wp_enqueue_script('jquery', "//code.jquery.com/jquery-1.12.0.min.js");
    wp_enqueue_script('modal-contact', get_stylesheet_directory_uri() . '/js/modal_contact.js', [], 1.0, true);


    //  wp_enqueue_script('Font-Awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css");

    // Charger des scripts spécifique pour la front page
    if (is_front_page()) {
        wp_enqueue_script(
            'rea_pictures',
            get_template_directory_uri() . '/js/front-rea.js',
            ['jquery'],
            '1.0',
            true
        );
    };
    /*   wp_enqueue_script(
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
    wp_enqueue_script('anim-scroll',  get_stylesheet_directory_uri() . '/js/anim-scroll.js', [], 1.0, true); // true indique enregitrer en fin de chargement pager
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


/*hook filter menu 'header'*/

function add_contact_link_to_menu_header($items, $args)
{
    if ($args->theme_location == 'header') {
        //  $admin_url = admin_url();
        $items .= '<li class="lien_contact"><a href=# >CONTACTS</a></li>';
    }
    return $items;
};
/************************************************ */
///filtres
function front_filtre_rea()
{

    // Vérification de sécurité
    /* */
    if (
        !isset($_REQUEST['nonce']) or
        !wp_verify_nonce($_REQUEST['nonce'], 'front_filtre_rea')
    ) {
        wp_send_json_error("Vous n’avez pas l’autorisation d’effectuer cette action.", 403);
    }

    /**************************************recuperer les valeur des taxomanie dans une varaible*********************************************************************** */
    /*

    $all_categorie = array_map(function ($term) {
        return $term->name;
    }, get_terms("categorie"));


    */
    /*exemple avec foreach
    foreach ((get_terms("categorie")) as $terms) {
    return $terms->name; }
    */
    /*
    $all_format = array_map(function ($term) {
        return $term->name;
    }, get_terms("format"));

 */

    /******************************************************************************************************************** */
    //recuperation des variables
    $post_id = $_POST["list"];
    /*  $order = $_POST['order'];
    if (

        (isset($_POST["categorie"]) && is_string($_POST["categorie"])) //verifier $_POST[] exist et si bien une chaine et si elle n est pas vide
        && $_POST["categorie"] !== ""
    ) {
        $categorie = $_POST["categorie"];
    } else {
        $categorie = $all_categorie;
    }

 */

    $query = new WP_Query(

        [
            'page_id' => $post_id,
            'post_status' => 'publish', //selement les posts publié
            'post_type' => 'realisations', //type de contenue a recuperer
            'posts_per_page' => 1, //nbrs de post dans la page(pagination)

        ]
    );
    $new_page_filter = "";


    if ($query->have_posts()) {
        ob_start();
        while ($query->have_posts()) :
            $query->the_post(); ?>
            <?php
            $list_champs = get_fields();

            if ($post_id) {

                if (get_fields() !== false) : ?>
                <?php foreach ($list_champs as $name => $value) : ?>
                    <?php if ($name === "ordinateur") {
                            if (get_field("ordinateur")) {
                                echo    '<a  href="' . get_permalink() . '"title="cliquer pour voir la fiche de cette réalisation" target="blank"><img class="img_computer" src="' . $value . ' "></a>';
                                /*   if (get_field("lien_site")) {
                                echo    '<a  href="' . esc_attr(get_field('lien_site')) . '" title="cliquer pour visiter le site" target="blank"><img class="img_computer" src="' . $value . ' "></a>';
                            } else {
                                echo '<img class="img_computer" src="' . $value . '">';
                            }*/
                            } else {
                                echo ' <a href="' . get_permalink() . '"title="cliquer pour voir la fiche de cette réalisation" target="blank"><div class="img_computer vide">
										<p>il n y a pas d aperçu disponible</p></br>
                                        <p>cliquer pour voir la fiche de cette realisation</p>
										
										</div></a>';
                            }
                        }

                    endforeach;
                endif;
            } else {
                echo '<p>choisie une réalisation pour avoir un aperçu</p>';
            }
        endwhile;
        $new_page_filter = ob_get_clean();
        //  var_dump($new_page_filter);

        // Envoyer les données au navigateur
        wp_send_json_success(array('html' => $new_page_filter));
        /*  if(get_field("ordinateur")){}
        else{}  */
    }  /*else {
        wp_send_json_success(array('html' => ""));
    }*/

    wp_reset_postdata(); // ! important réinisialise les donéé du post apres la boucle

    die();
};
/***************************** */
add_action('wp_ajax_front_filtre_rea', 'front_filtre_rea');
add_action('wp_ajax_nopriv_front_filtre_rea', 'front_filtre_rea');

/******************************* */




add_action('init', 'PCportofolio_init');
add_action('after_setup_theme', 'theme_PCportofolio');
add_action('wp_enqueue_scripts', 'theme_PCportofolio_assets');

add_filter('wp_nav_menu_items', 'add_contact_link_to_menu_header', 10, 2);
                    ?>