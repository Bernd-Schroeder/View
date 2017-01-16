<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.html_foot.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 18.12.2016, 17:46:21 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B34-includes begin
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B34-includes end

/* user defined constants */
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B34-constants begin
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B34-constants end

/**
 * Short description of class html_foot
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class html_foot
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  includes
     */
    public function get_representation($includes)
    {
     return
     
     $includes .
     
     "</body>" .
     "</html>";
    }
}?>