<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.includes.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 21.12.2016, 11:40:58 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B2E-includes begin
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B2E-includes end

/* user defined constants */
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B2E-constants begin
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B2E-constants end

/**
 * Short description of class includes
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class includes
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root_vendor()
    {
     // return dirname(dirname(dirname(dirname(__FILE__)))) . 
     // '/vendor/';
     return '../../../vendor/';
    }
}?>