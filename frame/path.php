<?php

error_reporting(E_ALL);

/**
 * This Object is the representation of a main structure of a city
 *
 * @author Bernd Schröder
 * @version 1.0
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * This Object is the representation of evey city used in this model.
 *
 * @author Bernd Schröder
 * @version 1.0
 */
class path
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     * this function will insert all the relevant data in the city
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_frame_base()
    {
    $host = htmlspecialchars($_SERVER["HTTP_HOST"]);
    $tmp = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");
    $tmp = ltrim( $tmp, "/\\" );
    $domain = substr( $tmp, 0, strpos( $tmp, "/" ));
    $frame_base  = "/" . $domain;
    $frame_base  = "";
//    return "http://" . $host . $frame_base;
    }
    
    public function get_frame()
    {
    $host = htmlspecialchars($_SERVER["HTTP_HOST"]);
    $frame   = htmlspecialchars($_SERVER["PHP_SELF"]);
    return "http://" . $host . $frame;    
    }
    
    public function get_start_frame()
    {               
    return $this->get_frame_base() . '/view/frame/A/A0_frame.php';
    }
}?>