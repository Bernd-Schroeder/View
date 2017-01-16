<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.includes_simple_foot.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 21.12.2016, 11:41:21 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include includes
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.includes.php');

/* user defined includes */
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B3D-includes begin
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B3D-includes end

/* user defined constants */
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B3D-constants begin
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B3D-constants end

/**
 * Short description of class includes_simple_foot
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class includes_simple_foot
    extends includes
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_representation()
    {
     return
     "<script src=\"https://ajax.googleapis.com/".
     "ajax/libs/jquery/1.12.4/jquery.min.js\"></script>" .
     
     "<script src=\"". $this->get_root_vendor() .
     "bootstrap/js/bootstrap.min.js\"></script>";
    }
}?>