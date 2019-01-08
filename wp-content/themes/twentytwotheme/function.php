<?php
    function register_enqueue_style() {
     $theme_data = wp_get_theme();

     /* Registrando estilos */
     wp_register_style('bootstrap', get_parent_theme_file_uri('/assets/vendor/bootstrap/css/bootstrap.css'), null, '1.0.0', 'screen');
     wp_register_style('main', get_parent_theme_file_uri('/assets/css/portfolio-item.css'), null, '1.0.0', 'screen');
     /* Enqueue estilos */
     wp_enqueue_style('bootstrap');;
     wp_enqueue_style('main');
     }
     //Activar estilos
     add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );


      //Registro de scripts
      function register_enqueue_scripts() {
  		$theme_data = wp_get_theme();

      /* Deregister Scripts */
  		wp_deregister_script( 'jquery' );
  		wp_deregister_script( 'jquery-migrate' );

      /* Registrando Scripts */
  		wp_register_script('jQuery3', get_parent_theme_file_uri('/assets/vendor/jquery/jquery.min.js'), null, '3.2.1', true);
  		wp_register_script('jQuery_migrate', get_parent_theme_file_uri('/assets/vendor/js/jquery-migrate.min.js'), array('jQuery3'), '3.0.0', true);
  		wp_register_script('bootstrap', get_parent_theme_file_uri('/assets/vendor/bootstrap/js/bootstrap.min.js'), array('jQuery_migrate'), null, true);


      //migrate viene incorporado en WordPress
      /* Enqueue Scripts */
  		wp_enqueue_script('bootstrap');
    }

      //Activar scripts
      add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );
?>
