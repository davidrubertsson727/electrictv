<?php

// ====================================
// Class Over-rides 
// ====================================

/**
 * soilCustomUtil
 * Extends the soilUtil Class.
 *
 * @author Blue Riot Labs
 * @uses soilUtil/scbUtil
 */
class soilCustomUtil extends soilUtil {

}


/**
 * soilCustomOptions
 * Extends the soilOptions Class.
 *
 * @author Blue Riot Labs
 * @uses soilOptions/scbOptions
 */
class soilCustomOptions extends soilOptions {
	public function __construct( $key, $file, $defaults = array() ) {
		parent::__construct( $key, $file, $defaults );
	}
}


/**
 * soilCustomForms
 * Extends the soilForms Class.
 *
 * @author Blue Riot Labs
 * @uses soilForms/soilForm/scbForms/scbForm
 */
class soilCustomForms extends soilForms {

}


/**
 * soilCustomForm
 * Extends the soilForm Class.
 *
 * @author Blue Riot Labs
 * @uses soilForm/scbForm
 */
class soilCustomForm extends soilForm {
	function __construct( $data, $prefix = false ) {
		parent::__construct( $data, $prefix );
	}
}


/**
 * soilCustomTable
 * Extends the soilTable Class.
 *
 * @author Blue Riot Labs
 * @uses soilTable/scbTable
 */
class soilCustomTable extends soilTable {
	function __construct( $name, $file, $columns, $upgrade_method = 'dbDelta' ) {
		parent::__construct( $name, $file, $columns, $upgrade_method );
	}
}


/**
 * soilCustomWidget
 * Extends the soilWidget Class.
 *
 * @author Blue Riot Labs
 * @uses soilWidget/scbWidget
 */
abstract class soilCustomWidget extends soilWidget {

}


/**
 * soilCustomAdminPage
 * Extends the soilAdminPage Class.
 *
 * @author Blue Riot Labs
 * @uses soilAdminPage/scbAdminPage
 */
abstract class soilCustomAdminPage extends soilAdminPage {
	function __construct( $file, $options = null ) {
		parent::__construct( $file, $options );
	}
}


/**
 * soilCustomBoxesPage
 * Extends the soilTable Class.
 *
 * @author Blue Riot Labs
 * @uses soilBoxesPage/scbBoxesPage
 */
abstract class soilCustomBoxesPage extends soilBoxesPage {
	function __construct( $file, $options = null ) {
		parent::__construct( $file, $options );
	}
}


/**
 * soilCustomCron
 * Extends the soilCron Class.
 *
 * @author Blue Riot Labs
 * @uses soilCron/scbForm
*/
class soilCustomCron extends soilCron {
	function __construct( $data, $prefix = false ) {
		parent::__construct( $data, $prefix );
	}
}


/**
 * soilCustomHooks
 * Extends the soilHooks Class.
 *
 * @author Blue Riot Labs
 * @uses soilHooks/scbHooks
 */
class soilCustomHooks extends soilHooks {

}


/*
 * soilCustomRegisterTaxonomy
 * Extends the soilRegisterTaxonomy Class.
 *
 * @author Blue Riot Labs
 * @uses soilRegisterTaxonomy
*/
class soilCustomRegisterTaxonomy extends soilRegisterTaxonomy {
	public function __construct( $taxonomy = null,  $post_types = null, $sing_name = null, $args = array(), $plural_name = null ) {
		parent::__construct( $taxonomy,  $post_types, $sing_name, $args, $plural_name );
	}
}


/**
 * soilCustomRegisterPostType
 * Extends the soilRegisterPostType Class.
 *
 * @author Blue Riot Labs
 * @uses soilRegisterTaxonomy
 */
class soilCustomRegisterPostType extends soilRegisterPostType {

}


/**
 * soilCustomMetaBox
 * Extends the soilMetaBox Class.
 *
 * @author Blue Riot Labs
 * @uses soilMetaBox
 */
class soilCustomMetaBox extends soilMetaBox {

}



// ===============================
// Filters
// ===============================





// ====================================
// Functions pass throughs / over-rides
// ====================================


/**
 * soilCustom_register_taxonomy
 * A helper function for the soilCustomRegisterTaxonomy class.
 */
if ( ! function_exists( 'soil_register_custom_taxonomy' ) && class_exists( 'soilCustomRegisterTaxonomy' ) ) {
	function soil_register_custom_taxonomy( $taxonomy = null,  $post_types = null, $sing_name = null, $args = array(), $plural_name = null ) {
		$custom_taxonomy = new soilCustomRegisterTaxonomy( $taxonomy, $post_types, $sing_name, $args, $plural_name );
	}
}


/**
 * soilCustomRegisterPostType
 * A helper function for the soilRegisterPostType class.
 */
if ( ! function_exists( 'soil_register_custom_post_type' ) && class_exists( 'soilCustomRegisterPostType' ) ) {
	function soil_register_custom_post_type( $post_type = null, $args=array(), $custom_plural = false ) {
		$custom_post = new soilCustomRegisterPostType( $post_type, $args, $custom_plural );
	}
}


/**
 * soilCustom_register_meta_box
 * A helper function for the soilRegisterPostType class.
 */
if ( ! function_exists( 'soil_register_custom_meta_box' ) && class_exists( 'soilCustomMetaBox' ) ) {
	function soil_register_custom_meta_box( $metabox ) {
		$custom_post = new soilCustomMetaBox( $metabox );
	}
}
