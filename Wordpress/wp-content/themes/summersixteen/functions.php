<?php

/**
CREATION D'UN CUSTOM POST TYPE
*/

add_action( 'init', 'create_post_type' );

function create_post_type() {
     register_post_type('album', array(
      'label'     => 'Albums',
      'labels'    => array(
          'add_new_item'  => 'Ajouter un album',
          'edit_item'     => 'Modifier un album',
          'new_item'      => 'Ajouter un album',
        'view_item'     => 'Voir l\'album',
          'singular_name' => 'Album'
      ),
      'public'            => true,
      'show_ui'           => true,
      'capability_type'   => 'post',
      'hierarchical'      => false,
      'has_archive'       => true,
      'rewrite' => array( 'slug' =>  'album'),
      'supports'          => array('title', 'editor', 'excerpt', 'thumbnail'),
      'show_in_nav_menus' => true
  ));
}

/**
CREATION D'UNE TAXONOMIE (ou catégorie)
*/

add_action( 'init', 'create_taxonomy' );

function create_taxonomy() {
  register_taxonomy(
    'genre',
    'album',
    array(
      'label' => __( 'Genre' ),
      'rewrite' => array( 'slug' => 'genre' ),
      'hierarchical' => true,
    )
  );
}

/**
AJOUT D'UNE METABOX (année de sortie)
*/

add_action('add_meta_boxes','init_metabox');

function init_metabox(){
  add_meta_box('annee_sortie', 'Année de sortie', 'annee_sortie', 'album', 'side','high');
}

function annee_sortie($post){
  $url = get_post_meta($post->ID,'_annee_sortie',true);
  echo '<label for="annee">Année de sortie :</label>';
  echo '<input id="annee" type="text" name="annee_sortie" value="'.$url.'" />';
}

add_action('save_post','save_metabox');

function save_metabox($post_id){
  if(isset($_POST['annee_sortie']))
      update_post_meta($post_id, '_annee_sortie', $_POST['annee_sortie']);
}

/**
CREER UN SHORTCODE GOOGLE MAP
*/

function  monshortcode ( ) {
  return '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2711.418713171195!2d-1.5538260488781914!3d47.1888165790569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805e95c774b07a3%3A0xf1dfc3464b1e4389!2sIMIE+-+Ecole+informatique+Nantes!5e0!3m2!1sfr!2sfr!4v1459690063565" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
}
add_shortcode( 'google_map', 'monshortcode' );

/**
CREER UNE SIDEBAR (ZONE DE WIDGETS)
*/

add_action( 'widgets_init', 'ajout_de_ma_sidebar' );

function ajout_de_ma_sidebar() {

    register_sidebar(array('name'=>'Ma sidebar personnalisée',
      'id' => 'ma-sidebar-personnalisee',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));


  }

/**
Ajout d'un menu
*/

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'mon-menu', __( 'Menu principal', 'theme-slug' ) );
}
/**
AJOUT CSS/JS
*/
function fcx_style_js(){
    //Version de JQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery','https://code.jquery.com/jquery-3.1.0.min.js');
    wp_enqueue_script('jquery');

    wp_register_style('css',get_template_directory_uri().'/CSS/styles.css');
    wp_enqueue_style('css');

    wp_register_script('js-galerie2', get_site_url().'/wp-content/mu-plugins/js/cycle2.js',array('jquery'),'2.1.6',true);
    wp_enqueue_script('js-galerie2');
}
add_action("wp_enqueue_scripts","fcx_style_js");
/**
FORMATS D'IMAGES
*/
add_action('after_setup_theme','create_image_size');
function create_image_size()
{
    add_theme_support('post-thumbnails');
    add_image_size('jumbotron',600,600,true);
}
/**
CREER UN WIDGET PERSONNALISE
*/
add_action('widgets_init', 'my_widget');

function my_widget(){
  register_widget('myNews_widget');
}

class myNews_widget extends WP_widget{

  function __construct(){
    $options = array(
      "classname"   => "myNews-widget",
      "description" => "Ce Widget est un test"
    );
    // id / nom du Widget qui sera affiché dans le back office / nos options
    parent::__construct('widget-myNews', 'Widget My News', $options);
  }

  function form($instance){
  // appel une méthode

if(isset($instance['nombre'])) $nombre = esc_attr($instance['nombre']);

      echo '<p>
      <input class="widefat" type="number" name="'.$this->get_field_name('nombre').'" value="'.$nombre.'" /></p>';


  }

  function update($new_instance, $old_instance){

    //$instance = $old_instance;

    $instance['nombre'] = strip_tags($new_instance['nombre']);

    return $instance;
  }

  function widget($args, $instance){

    $args = array(
      'post_type' => 'album',
      'posts_per_page' => $instance['nombre'],
      'orderby'   => 'post_date',
          'order' => 'DESC'
      );

    $the_query = new WP_Query( $args );
/**
Début de la boucle
*/
    while ($the_query->have_posts()) : $the_query->the_post();
/**
BLoc éxécuté pour chaque album
*/      ?>
      <a href="<?php echo get_permalink(get_the_ID()); ?>">
      <?php echo get_the_title(); ?>
      </a><br>
      <?php
/**
Fin de la boucle
*/
    endwhile;
  }}
