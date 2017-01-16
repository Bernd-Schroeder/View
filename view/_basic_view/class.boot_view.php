<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.boot_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 08.01.2017, 19:59:50 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_view
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_view.php');

/* user defined includes */
// section 10-30--8-108--119853e3:158fc7f75d1:-8000:000000000000141A-includes begin
// section 10-30--8-108--119853e3:158fc7f75d1:-8000:000000000000141A-includes end

/* user defined constants */
// section 10-30--8-108--119853e3:158fc7f75d1:-8000:000000000000141A-constants begin
// section 10-30--8-108--119853e3:158fc7f75d1:-8000:000000000000141A-constants end

/**
 * Short description of class boot_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class boot_view
    extends basic_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  control_error
     */
    public function get_control_error_info($control_error)
    {
     echo "huhu";
     //require('language/'. $language . '/general/control_error.php');
     //$result  .= "<p class=\"box error\"><img src=\"".
     //$_SESSION['icons'] . "error.png\"/>" .
     //"<b>" . $control_lang['control_error_'. 0] . ":</b>" . "<br />" .
     //$control_lang['control_error_'. $control_error] . "</p>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  warning_info
     */
    public function get_control_warning_info($warning_info)
    {
     echo "huhu";
     //require('language/'. $language . '/general/control_warning.php');
     //$result  .= "<p class=\"box warning\"><img src=\"".
     //$_SESSION['icons'] . "warning.png\"/>" .
     //"<b>" . $control_lang['control_warning_'. 0] . ":</b>" . "<br />" .
     //$control_lang['control_warning_'. $control_warning] . "</p>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  control_info
     */
    public function get_control_info_info($control_info)
    {
     echo "huhu";
     //require('language/'. $language . '/general/control_info.php');
     //$result  .= "<p class=\"box info\"><img src=\"".
     //$_SESSION['icons'] . "info.png\"/>" .
     //"<b>" . $control_lang['control_info_'. 0] . ":</b>" . "<br />" .
     //$control_lang['control_info_'. $control_info] . "</p>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  database_error
     */
    public function get_database_error_info($database_error)
    {
     echo "huhu";
     //require('language/'. $language . '/general/database_error.php');
     //$result  .= "<p class=\"box error\"><img src=\"".
     //$_SESSION['icons'] . "error.png\"/>" .
     //"<b>" . $database_lang['database_error_'. 0] . ":</b>" . "<br />" .
     //$database_lang['database_error_'. $database_error] . "</p>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  database_warning
     */
    public function get_database_warning_info($database_warning)
    {
     echo "huhu";
     //require('language/' . $language . '/general/database_warning.php');
     //$result  .= "<p class=\"box warning\"><img src=\"".
     //$_SESSION['icons'] . "warning.png\"/>" .
     //"<b>" . $database_lang['database_warning_'. 0] . ":</b>" . "<br />" .
     //$database_lang['database_warning_'. $database_warning] . "</p>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_representation()
    {
     return
     $this->get_html_head() .
     $this->get_nav() .
     $this->get_main() .
     $this->get_footer() .
     $this->get_html_foot();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_html_head()
    {
     if( defined('__ROOT_VIEW__') == FALSE )
     { define('__ROOT_VIEW__', $this->get_root_view() ); }
     require_once(__ROOT_VIEW__. 'view/_basic_view/class.html_head.php' );
          
     $head = new html_head();
     return $head->get_representation( $this->get_head_includes() );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_head_includes()
    {
     $includes = $this->get_includes();
     
     switch($includes)
     {
     case ( 0 ):
     // simple boot includes
     {
     if( defined('__ROOT_VIEW__') == FALSE )
     { define('__ROOT_VIEW__', $this->get_root_view() ); }
     require_once(__ROOT_VIEW__. 
     'view/_basic_view/class.includes_simple_head.php' );
     
     $head = new includes_simple_head();
     return $head->get_representation( $this->get_includes() );
     }
     break;
     
     case ( 1 ):
     // advanved boot includes
     {
     ;
     }
     break;
     
     default:
     // simple boot includes
     {
     ;
     }
     break;
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_main()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_footer()
    {
     return
     "<footer>" .
     "<div class=\container\">" .
     "<hr>";
     "<p><small>" .
     "<a href=\"http://facebook.com\">Like me</a>" .
     "on facebook</small></p>";
     "</div>" .
     "</footer>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_html_foot()
    {
     if( defined('__ROOT_VIEW__') == FALSE )
     { define('__ROOT_VIEW__', $this->get_root_view() ); }
     require_once(__ROOT_VIEW__. 'view/_basic_view/class.html_foot.php' );
          
     $foot = new html_foot();
     return $foot->get_representation( $this->get_foot_includes() );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_foot_includes()
    {
     $includes = $this->get_includes();
     
     switch($includes)
     {
     case ( 0 ):
     // simple boot includes
     {
     if( defined('__ROOT_VIEW__') == FALSE )
     { define('__ROOT_VIEW__', $this->get_root_view() ); }
     require_once(__ROOT_VIEW__. 
     'view/_basic_view/class.includes_simple_foot.php' );
     
     $foot = new includes_simple_foot();
     return $foot->get_representation( $this->get_includes() );
     }
     break;
     
     case ( 1 ):
     // advanved boot includes
     {
     ;
     }
     break;
     
     default:
     // simple boot includes
     {
     ;
     }
     break;
     }
    }
}?>