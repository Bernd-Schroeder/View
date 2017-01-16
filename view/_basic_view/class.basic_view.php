<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.basic_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 18.12.2016, 20:02:18 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 127-0-0-1-58eb24dd:145ac7f252d:-8000:0000000000001320-includes begin
// section 127-0-0-1-58eb24dd:145ac7f252d:-8000:0000000000001320-includes end

/* user defined constants */
// section 127-0-0-1-58eb24dd:145ac7f252d:-8000:0000000000001320-constants begin
// section 127-0-0-1-58eb24dd:145ac7f252d:-8000:0000000000001320-constants end

/**
 * Short description of class basic_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class basic_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute language_array
     *
     * @access private
     * @var Integer
     */
    private $language_array = null;

    /**
     * Short description of attribute includes
     *
     * @access public
     * @var Integer
     */
    public $includes = null;

    /**
     * Short description of attribute database_error
     *
     * @access private
     * @var Integer
     */
    private $database_error = null;

    /**
     * Short description of attribute database_warning
     *
     * @access private
     * @var Integer
     */
    private $database_warning = null;

    /**
     * Short description of attribute control_error
     *
     * @access private
     * @var Integer
     */
    private $control_error = null;

    /**
     * Short description of attribute control_warning
     *
     * @access private
     * @var Integer
     */
    private $control_warning = null;

    /**
     * Short description of attribute control_info
     *
     * @access private
     * @var Integer
     */
    private $control_info = null;

    /**
     * Short description of attribute watch_entity
     *
     * @access protected
     * @var Integer
     */
    protected $watch_entity = null;

    /**
     * Short description of attribute watched_entity
     *
     * @access protected
     * @var Integer
     */
    protected $watched_entity = null;

    /**
     * Short description of attribute watch_relation
     *
     * @access protected
     * @var Integer
     */
    protected $watch_relation = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  watched_entity
     */
    public function __construct($watched_entity)
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.member.php');
     
     $this->watch_entity = new member();
     if ( $this->watch_entity->is_online() )
     {
     $this->watch_entity->set_id($_SESSION['watch_id']);
     $this->watch_entity->load();
     }
     else if(isSet($_COOKIE["lang"]))
     { $this->watch_entity->set_language($_COOKIE["lang"]); }
     else
     {
     $language = $this->watch_entity->get_remote_language();
     $this->watch_entity->set_language($language);
     }
     $this->watched_entity = $watched_entity;
     
     if (( $this->watched_entity != null ) AND
     (isset($_SESSION['watched_id'])))
     {
     $this->watched_entity->set_id($_SESSION['watched_id']);
     $this->watched_entity->load();
     }
     $this->includes = (int)0;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_includes()
    {
     return $this->includes;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  includes
     */
    public function set_includes($includes)
    {
     $this->includes = $includes;
     // includes defines the bootstrap and java includes in header and footer
     // 0 - simple bootstrap packes
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  language_prefix
     */
    public function load_language($language_prefix)
    {
     $lang_path = $this->watch_entity->get_language() . '/' . 
     $language_prefix . '.php';
     
     if( defined('__ROOT_VIEW_LANG__') == FALSE )
     { define('__ROOT_VIEW_LANG__', $this->get_root_view_language() ); }
     require_once(__ROOT_VIEW_LANG__. $lang_path );
     
     $this->set_language_array( $lang );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  language_array
     */
    public function set_language_array($language_array)
    {
     $this->language_array = $language_array;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_language_array()
    {
     return $this->language_array;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function load_database_error()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'generated/class.db_error.php');
     
     $this->database_error = new db_error();
     $this->database_error->load();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_database_error()
    {
     return $this->database_error;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_database_warning()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'generated/class.db_warning.php');
     
     $this->database_warning = new db_warning();
     $this->database_warning->load();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_database_warning()
    {
     return $this->database_warning;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_control_error()
    {
     if( defined('__ROOT_CONTROL__') == FALSE )
     { define('__ROOT_CONTROL__', $this->get_root_control() ); }
     require_once(__ROOT_CONTROL__.'basic/class.control_error.php');
     
     $this->control_error = new control_error();
     $this->control_error->load();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_control_error()
    {
     return $this->control_error;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_control_warning()
    {
     if( defined('__ROOT_CONTROL__') == FALSE )
     { define('__ROOT_CONTROL__', $this->get_root_control() ); }
     require_once(__ROOT_CONTROL__.'basic/class.control_warning.php');
     
     $this->control_warning = new control_warning();
     $this->control_warning->load();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_control_warning()
    {
     return $this->control_warning;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_control_info()
    {
     if( defined('__ROOT_CONTROL__') == FALSE )
     { define('__ROOT_CONTROL__', $this->get_root_control() ); }
     require_once(__ROOT_CONTROL__.'basic/class.control_info.php');
     
     $this->control_info = new control_info();
     $this->control_info->load();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_control_info()
    {
     return $this->control_info;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_watch_entity()
    {
     return $this->watch_entity;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_watched_entity()
    {
     return $this->watched_entity;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  watch_relation
     */
    public function set_watch_relation($watch_relation)
    {
     $this->watch_relation = $watch_relation;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_watch_relation()
    {
     return $this->watch_relation;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_top_nav()
    {
     ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_left_nav()
    {
     ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_right_nav()
    {
     ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_session_information()
    {
     $this->load_database_error();
     $database_error   = $this->database_error->get_error_code();
     
     $this->load_database_warning();
     $database_warning = $this->database_warning->get_error_code();
     
     $this->load_control_error();
     $control_error    = $this->control_error->get_error_code();
     
     $this->load_control_warning();
     $control_warning  = $this->control_warning->get_error_code();
     
     $this->load_control_info();
     $control_info     = $this->control_info->get_error_code();
     
     $result  = "";
     $language = $this->watch_entity->get_language();
     
     if ( $control_error > 0 )
     { return $this->get_control_error_info( $control_error ); }
     elseif ( $control_warning > 0 )
     { return $this->get_control_warning_info( $control_warning ); }
     elseif ( $control_info > 0 )
     { return $this->get_control_info_info( $control_info ); }
     
     if ( $database_error > 0 )
     { return $this->get_database_error_info( $database_error ); }
     elseif ( $database_warning > 0 )
     { return $this->get_database_warning_info( $database_warning ); }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root()
    {
     return dirname(dirname(dirname(dirname(__FILE__)))) . '/';
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root_data()
    {
     return $this->get_root() . 'data/';
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root_control()
    {
     return $this->get_root() . 'control/';
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root_view()
    {
     return $this->get_root() . 'view/';
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root_view_language()
    {
     return $this->get_root() . 'view/view/language/';
    }
}?>