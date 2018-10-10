<?php

    require_once( dirname(__FILE__) . '/../vendor/TemplateX.php' );


    // initialize View system
    class View
    {
        private static $x;

        public static function init()
        {
            self::$x = new TemplateX( array(dirname(__FILE__) . '/../views') );
        }

        public static function render($template_file, $props = array())
        {
            self::$x->setTemplate( $template_file );
            self::$x->setContext( $props );
            return self::$x->render();
        }
    }
    View::init();


    // default global settings
    header('Content-Type: text/html; charset=utf-8');

?>
