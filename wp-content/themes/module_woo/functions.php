<?php


function theme_init()
{
	add_theme_support('menus');
	register_nav_menu('primary','menu Principal');
	register_sidebar(array('name' => 'Classement'));
	register_sidebar(array('name' => 'Sponsor'));

    register_nav_menus( array(
        'footer' => 'Menu footer',) );

}
add_action('after_setup_theme','theme_init');

class BS3_Walker_Nav_Menu extends Walker_Nav_Menu {
    /**
     * Traverse elements to create list from elements.
     *
     * Display one element if the element doesn't have any children otherwise,
     * display the element and its children. Will only traverse up to the max
     * depth and no ignore elements under that depth. It is possible to set the
     * max depth to include all depths, see walk() method.
     *
     * This method shouldn't be called directly, use the walk() method instead.
     *
     * @since 2.5.0
     *
     * @param object $element Data object
     * @param array $children_elements List of elements to continue traversing.
     * @param int $max_depth Max depth to traverse.
     * @param int $depth Depth of current element.
     * @param array $args
     * @param string $output Passed by reference. Used to append additional content.
     * @return null Null on failure with no changes to parameters.
     */
    function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        $id_field = $this->db_fields['id'];
 
        if ( isset( $args[0] ) && is_object( $args[0] ) )
        {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
 
        }
 
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
 
    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item Menu item data object.
     * @param int $depth Depth of menu item. Used for padding.
     * @param int $current_page Menu item ID.
     * @param object $args
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        if ( is_object($args) && !empty($args->has_children) )
        {
            $link_after = $args->link_after;
            $args->link_after = ' <b class="caret"></b>';
        }
 
        parent::start_el($output, $item, $depth, $args, $id);
 
        if ( is_object($args) && !empty($args->has_children) )
            $args->link_after = $link_after;
    }
 
    /**
     * @see Walker::start_lvl()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int $depth Depth of page. Used for padding.
     */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("t", $depth);
        $output .= "n$indent<ul class='dropdown-menu list-unstyled'>n";
    }
}


add_filter('nav_menu_link_attributes', function($atts, $item, $args) {
    if ( $args->has_children )
    {
        $atts['data-toggle'] = 'dropdown';
        $atts['class'] = 'dropdown-toggle';
    }
 
    return $atts;
}, 10, 3);

add_filter('nav_menu_link_attributes', function($atts, $item, $args) {
    if ( $args->has_children )
    {
        $atts['data-toggle'] = 'dropdown';
        $atts['class'] = 'dropdown-toggle';
    }
 
    return $atts;
}, 10, 3);




function codex_custom_init() {
    
    // membres
    $labels = array(
        'name' => 'Membres',
        'singular_name' => 'membre',
        'add_new' => 'Nouveau membres',
        'add_new_item' => 'Ajouter un nouveau membre',
        'edit_item' => 'Editer une Membre',
        'new_item' => 'Nouveau Membre',
        'all_items' => 'Tous les membres',
        'view_item' => 'Voir un Membre',
        'search_items' => 'Chercher un Membre',
        'not_found' =>  'Aucun membre trouvé',
        'not_found_in_trash' => 'Aucun membre trouvé dans la corbeille', 
        'parent_item_colon' => '',
        'menu_name' => 'Membres'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'query_var' => true,
        'rewrite' => array( 'slug' => 'membre' ),
        'capability_type' => 'post',
        'has_archive' => true, 
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'thumbnail')
    ); 
    
    register_post_type('membre', $args );

    
}
add_action('init', 'codex_custom_init');

