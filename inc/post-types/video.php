<?php



// Video Tag
if (!class_exists('ElectricTvTaxVideoTag')) {

  class ElectricTvTaxVideoTag extends soilCustomRegisterTaxonomy {

    protected $taxonomy = 'etv_videotag';
    protected $post_types = 'etv_video';
    protected $sing_name = 'Video Tag';
    protected $plural_name = 'Video Tags';
    protected $taxonomy_args = array(
      'rewrite' => array('slug' => 'videos/tag'),
    );
  
      function __construct() {    
        parent::__construct( $this->taxonomy,  $this->post_types, $this->sing_name, $this->taxonomy_args, $this->plural_name );  
      }

  }
  
  new ElectricTvTaxVideoTag();
}


// Video Category
if (!class_exists('ElectricTvTaxVideoCategory')) {

  class ElectricTvTaxVideoCategory extends soilCustomRegisterTaxonomy {

    protected $taxonomy = 'etv_videocategory';
    protected $post_types = 'etv_video';
    protected $sing_name = 'Video Category';
    protected $plural_name = 'Video Categories';
    protected $taxonomy_args = array(
      'rewrite' => array('slug' => 'videos/category'),
    );
  
      function __construct() {    
        parent::__construct( $this->taxonomy,  $this->post_types, $this->sing_name, $this->taxonomy_args, $this->plural_name );  
      }

  }
  
  new ElectricTvTaxVideoCategory();
}


if (!class_exists('ElectricTvVideo')) {
  class ElectricTvVideo extends soilCustomRegisterPostType {

    protected $post_type = 'etv_video';
    protected $post_type_name = 'Video';
    protected $post_type_plural = 'Videos';
    protected $post_type_args = array(
      'taxonomies'  => array('etv_videotag', 'etv_videocategory'), // 'post_tag'
      'menu_icon'   => '/img/cpts/icon-video.png',
      'rewrite'     => array('slug' => 'videos'),
      'has_archive' => 'videos',
    );
  
    // Load Class
      function __construct() {    
      parent::__construct( $this->post_type, $this->post_type_args, $this->post_type_plural );  
      add_action( 'admin_init', array( &$this, 'meta_boxes' ) );
      }

    // Setup metaboxes
    function meta_boxes() {
      $prefix = '_etv_';

      // Details metabox
      soil_register_custom_meta_box(array(
        'id'         => $this->post_type . '_details', // Metabox ID
        'title'      => __($this->post_type_name . ' Details', 'roots'), // Metabox title
        'pages'      => array($this->post_type), // Post types to display on
        'priority'   => 'core',
        'show_names' => true, // Show field names on the left
        'fields'     => array(

          // Screen Cap
/*
          array(
            'name'  => __('Screen Shot(s)', 'roots'),
            'id'    => $prefix . 'screen_cap',
            'type'  => 'image',
            'desc'  => 'Upload a screenshot for this video.',
            'args'  => array(
              'class' => 'widefat',         
            )
          ),
*/

          // URL
          array(
            'name'  => __('YouTube URL', 'roots'),
            'id'    => $prefix . 'youtube_url',
            'type'  => 'text',
            'desc'  => 'Please use the full URL, including the "http://". ( Not the shortened URL. ) ',
            'args'  => array(
              'class' => 'widefat',         
            )
          ),


          // Featured On Home Page
          /*array(
            'name'  => __('Featured', 'roots'),
            'id'    => $prefix . 'featured_video',
            'type'  => 'checkbox',
            'desc'  => 'Display this video on the home page ',
            'args'  => array(
            # 'class' => 'widefat',         
            )
          ),*/

          // Featured Title
          array(
            'name'  => __('Featured Title', 'roots'),
            'id'    => '_etv_featured_title',
            'type'  => 'text',
            'desc'  => "If it's provided it will be used on front page, otherwise it will use the default WP title.",
            'args'  => array(
              'class' => 'widefat',
            )
          ),

          // Featured Content
          array(
            'name'  => __('Featured Excerpt', 'roots'),
            'id'    => '_etv_featured_excerpt',
            'type'  => 'wysiwyg',
            'desc'  => "If it's provided it will be used, otherwise it will use the standard excerpt.",
          ),

          // Featured Image (using built in Featured Image)
          //array(
          //  'name'  => __('Preview Image', 'roots'),
          //  'id'    => '_etv_preview_img',
          //  'type'  => 'file',
          //  'desc'  => "Please upload the image you would like to be used for previews/thumbnails.  If no image is specified, it will pull the image from Youtube.",
          //),

          // Below Video Content
          array(
            'name'  => __('Below Video Content', 'roots'),
            'id'    => '_etv_below_video_content',
            'type'  => 'wysiwyg',
            'desc'  => "Enter content will be shown below the video on the single video page.",
          )

        )
      ));
    }
  }
  
  new ElectricTvVideo();
  
}
