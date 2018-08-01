<?php
class vcj_contact_form_7 extends WPBakeryShortCode {

    function __construct() {
        add_action( 'init', array( $this, '_mapping' ) );
        add_shortcode( 'vcj_contact_form_7', array( $this, '_html' ) );
    }

    public function _mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) { return; }
        vc_map( array (
  'name' => 'Contact Form 7',
  'base' => 'vcj_contact_form_7',
  'description' => 'Place Contact Form 7',
  'category' => 'Jevelin Elements',
  'params' => 
  array (
    0 => 
    array (
      'param_name' => 'form_id',
      'heading' => 'Form ID',
      'description' => 'Enter your Contact Form ID',
      'value' => '',
      'type' => 'textfield',
      'class' => '',
      'std' => '',
      'group' => '',
      'admin_label' => true,
    ),
    1 => 
    array (
      'param_name' => 'style',
      'heading' => 'Style',
      'description' => 'Select main style',
      'value' => 
      array (
        'Standard' => 'style1',
        'Input Round Edges (2px border)' => 'style2',
        'Input Center Text' => 'style3',
        'Bottom Line with simple submit button' => 'style4',
        'Bottom Line with submit button in accent color' => 'style4 style6',
        'Dark line' => 'style5',
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => 'style1',
      'group' => '',
    ),
  ),
) );
    }

    public function _html( $atts, $content ) {
        $id_rand = jevelin_rand();
        ob_start();

        include( trailingslashit( get_template_directory() ) . '/framework-customizations/extensions/shortcodes/shortcodes/contact-form-7/views/view.php' );
        include( trailingslashit( get_template_directory() ) . '/framework-customizations/extensions/shortcodes/shortcodes/contact-form-7/static.php' );
        if( function_exists( 'jevelin_shortcode_contact_form_7_css' ) ) :
            jevelin_shortcode_contact_form_7_css( $atts, $id_rand );
        endif;

        return ob_get_clean();
    }
}

new vcj_contact_form_7();