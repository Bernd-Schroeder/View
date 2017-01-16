<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.html_head.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 18.12.2016, 17:45:56 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B32-includes begin
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B32-includes end

/* user defined constants */
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B32-constants begin
// section 10-5-29--89-115d770d:1590811fa2f:-8000:0000000000002B32-constants end

/**
 * Short description of class html_head
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class html_head
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
     "<!DOCTYPE html>" .
     "<html lang=\"en\">" .
     "<head>" .
     "<meta charset=\"utf-8\">" .
     "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">" .
     "<meta name=\"viewport\" " .
     "content=\"width=device-width, initial-scale=1\">" .
     "<title>3appy</title>" .
     
     $includes .
     
     "<!--[if lt IE 9]>" .
     "<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/" .
     "html5shiv.min.js\"></script>" .
     "<script src=\"https://oss.maxcdn.com/respond/1.4.2/" .
     "respond.min.js\"></script>" .
     "<![endif]-->" .
     
     "</head>" .
     "<body>";
    }
}?>