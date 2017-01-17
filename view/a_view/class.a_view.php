<?php

error_reporting(E_ALL);

/**
 * require_once('../../view/_basic_view/class.boot_view.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include boot_view
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.boot_view.php');

/* user defined includes */
// section 10-30--8-108--20db5dc0:158fd3b776d:-8000:0000000000001437-includes begin
// section 10-30--8-108--20db5dc0:158fd3b776d:-8000:0000000000001437-includes end

/* user defined constants */
// section 10-30--8-108--20db5dc0:158fd3b776d:-8000:0000000000001437-constants begin
// section 10-30--8-108--20db5dc0:158fd3b776d:-8000:0000000000001437-constants end

/**
 * require_once('../../view/_basic_view/class.boot_view.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class a_view
    extends boot_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     parent::__construct( null );
     $this->set_watch_relation( (int)0 );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_nav()
    {
     if( defined('__ROOT_VIEW__') == FALSE )
     { define('__ROOT_VIEW__', $this->get_root_view() ); }
     require_once(__ROOT_VIEW__. 
     'view/_navigation/class.extern_navigation.php' );
     
     $navigation = new extern_navigation();
     $navigation->build_navigation();
     return $navigation->get_representation();
    }
}?>