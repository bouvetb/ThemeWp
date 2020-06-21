<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ee887861742b',
	'title' => 'Logement',
	'fields' => array(
		array(
			'key' => 'field_5ee887ad8480c',
			'label' => 'Type',
			'name' => 'type',
			'type' => 'text',
			'instructions' => 'Appartement/Maison/Studio/etc',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Maison',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ee888438480d',
			'label' => 'Surface',
			'name' => 'surface',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '0.0',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '0.0',
			'max' => 1000000000,
			'step' => '',
		),
		array(
			'key' => 'field_5ee888768480e',
			'label' => 'Prix',
			'name' => 'prix',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '0.0',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '0.0',
			'max' => 1000000000000000000,
			'step' => '',
		),
		array(
			'key' => 'field_5ee888ab8480f',
			'label' => 'Frais d\'agences',
			'name' => 'frais_dagences',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '0.0',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '0.0',
			'max' => '100000000000000000000000000000000000',
			'step' => '',
		),
		array(
			'key' => 'field_5ee8890684810',
			'label' => 'Date de mise en Vente',
			'name' => 'date_de_mise_en_vente',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'd/m/Y',
			'return_format' => 'd/m/Y',
			'first_day' => 1,
		),
		array(
			'key' => 'field_5ee8894584811',
			'label' => 'Exposition',
			'name' => 'exposition',
			'type' => 'text',
			'instructions' => 'nord/sud/est/ouest',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ee88c3334868',
			'label' => 'Particularités',
			'name' => 'particularites',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'Particularites',
			'field_type' => 'checkbox',
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 0,
			'return_format' => 'id',
			'multiple' => 0,
			'allow_null' => 0,
		),
		array(
			'key' => 'field_5ee88d094c81f',
			'label' => 'Ville',
			'name' => 'ville',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'ville',
			),
			'taxonomy' => '',
			'allow_null' => 0,
			'multiple' => 0,
			'return_format' => 'object',
			'ui' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'logement',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ee88a6f917f2',
	'title' => 'Ville',
	'fields' => array(
		array(
			'key' => 'field_5ee88a84d13a9',
			'label' => 'Code Postal',
			'name' => 'code_postal',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5ee88a99d13aa',
			'label' => 'Nom de la Ville',
			'name' => 'nom_de_la_ville',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ee88aadd13ab',
			'label' => 'Description de la Ville',
			'name' => 'description_de_la_ville',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'ville',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
     )
   );
 }
add_action( 'init', 'register_my_menus' );
add_image_size( 'single-post-thumbnail', 590, 180 );
// Register Custom Post Type
function Logements() {

	$labels = array(
		'name'                  => _x( 'logements', 'Post Type General Name', 'Logement' ),
		'singular_name'         => _x( 'logement', 'Post Type Singular Name', 'Logement' ),
		'menu_name'             => __( 'Logements', 'Logement' ),
		'name_admin_bar'        => __( 'Post Type', 'Logement' ),
		'archives'              => __( 'Item Archives', 'Logement' ),
		'attributes'            => __( 'Item Attributes', 'Logement' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Logement' ),
		'all_items'             => __( 'All Items', 'Logement' ),
		'add_new_item'          => __( 'Add New Item', 'Logement' ),
		'add_new'               => __( 'Ajouter Logement', 'Logement' ),
		'new_item'              => __( 'Nouveau Logement', 'Logement' ),
		'edit_item'             => __( 'editer logement', 'Logement' ),
		'update_item'           => __( 'Mettre a jour logement', 'Logement' ),
		'view_item'             => __( 'View Item', 'Logement' ),
		'view_items'            => __( 'View Items', 'Logement' ),
		'search_items'          => __( 'Search Item', 'Logement' ),
		'not_found'             => __( 'Not found', 'Logement' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Logement' ),
		'featured_image'        => __( 'Featured Image', 'Logement' ),
		'set_featured_image'    => __( 'Set featured image', 'Logement' ),
		'remove_featured_image' => __( 'Remove featured image', 'Logement' ),
		'use_featured_image'    => __( 'Use as featured image', 'Logement' ),
		'insert_into_item'      => __( 'Insert into item', 'Logement' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Logement' ),
		'items_list'            => __( 'Items list', 'Logement' ),
		'items_list_navigation' => __( 'Items list navigation', 'Logement' ),
		'filter_items_list'     => __( 'Filter items list', 'Logement' ),
	);
	$args = array(
		'label'                 => __( 'logement', 'Logement' ),
		'description'           => __( 'Des logements', 'Logement' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-home',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'logement', $args );

}
add_action( 'init', 'Logements', 0 );
// Register Custom Post Type
function Villes() {

	$labels = array(
		'name'                  => _x( 'villes', 'Post Type General Name', 'Villes' ),
		'singular_name'         => _x( 'ville', 'Post Type Singular Name', 'Villes' ),
		'menu_name'             => __( 'Villes', 'Villes' ),
		'name_admin_bar'        => __( 'Post Type', 'Villes' ),
		'archives'              => __( 'Item Archives', 'Villes' ),
		'attributes'            => __( 'Item Attributes', 'Villes' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Villes' ),
		'all_items'             => __( 'All Items', 'Villes' ),
		'add_new_item'          => __( 'Add New Item', 'Villes' ),
		'add_new'               => __( 'Ajouter Ville', 'Villes' ),
		'new_item'              => __( 'Nouvelle Ville', 'Villes' ),
		'edit_item'             => __( 'editer Ville', 'Villes' ),
		'update_item'           => __( 'Mettre a jour Ville', 'Villes' ),
		'view_item'             => __( 'View Item', 'Villes' ),
		'view_items'            => __( 'View Items', 'Villes' ),
		'search_items'          => __( 'Search Item', 'Villes' ),
		'not_found'             => __( 'Not found', 'Villes' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Villes' ),
		'featured_image'        => __( 'Featured Image', 'Villes' ),
		'set_featured_image'    => __( 'Set featured image', 'Villes' ),
		'remove_featured_image' => __( 'Remove featured image', 'Villes' ),
		'use_featured_image'    => __( 'Use as featured image', 'Villes' ),
		'insert_into_item'      => __( 'Insert into item', 'Villes' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Villes' ),
		'items_list'            => __( 'Items list', 'Villes' ),
		'items_list_navigation' => __( 'Items list navigation', 'Villes' ),
		'filter_items_list'     => __( 'Filter items list', 'Villes' ),
	);
	$args = array(
		'label'                 => __( 'ville', 'Villes' ),
		'description'           => __( 'Des villes', 'Villes' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor','thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-location',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'ville', $args );

}
add_action( 'init', 'Villes', 0 );
add_theme_support( 'post-thumbnails' );
// Register Custom Taxonomy
function Particularites() {

	$labels = array(
		'name'                       => _x( 'Particularites', 'Taxonomy General Name', 'Particularites' ),
		'singular_name'              => _x( 'Particularite', 'Taxonomy Singular Name', 'Particularites' ),
		'menu_name'                  => __( 'Particularites', 'Particularites' ),
		'all_items'                  => __( 'Toutes les Particularites', 'Particularites' ),
		'parent_item'                => __( 'Parent Item', 'Particularites' ),
		'parent_item_colon'          => __( 'Parent Item:', 'Particularites' ),
		'new_item_name'              => __( 'nouvelle Particularite', 'Particularites' ),
		'add_new_item'               => __( 'Ajouter Particularite', 'Particularites' ),
		'edit_item'                  => __( 'Editer Particularite', 'Particularites' ),
		'update_item'                => __( 'Mise a jour Particularite', 'Particularites' ),
		'view_item'                  => __( 'View Item', 'Particularites' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'Particularites' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'Particularites' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'Particularites' ),
		'popular_items'              => __( 'Popular Items', 'Particularites' ),
		'search_items'               => __( 'Search Items', 'Particularites' ),
		'not_found'                  => __( 'Not Found', 'Particularites' ),
		'no_terms'                   => __( 'No items', 'Particularites' ),
		'items_list'                 => __( 'Items list', 'Particularites' ),
		'items_list_navigation'      => __( 'Items list navigation', 'Particularites' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'Particularites', array( 'logement' ), $args );

}
add_action( 'init', 'Particularites', 0 );
function load_assets(){
	wp_enqueue_style( "main", get_template_directory_uri()."/css/main.css");
	wp_enqueue_style("reset", get_template_directory_uri()."/css/reset.css");
	wp_enqueue_style("responsive", get_template_directory_uri()."/css/responsive.css");
	wp_enqueue_script( "jquery", get_template_directory_uri()."/js/jquery.js",null,null,true);
	wp_enqueue_script( "main", get_template_directory_uri()."/js/main.js",null,null,true);
	

}
add_action("wp_enqueue_scripts","load_assets");
?>
