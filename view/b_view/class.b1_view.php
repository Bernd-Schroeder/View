<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.b1_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 08.01.2017, 15:44:04 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * require_once('../../view/_basic_view/class.boot_view.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.b_view.php');

/* user defined includes */
// section 10-5-24--17--d4910b2:1597e5fa31f:-8000:00000000000013D9-includes begin
// section 10-5-24--17--d4910b2:1597e5fa31f:-8000:00000000000013D9-includes end

/* user defined constants */
// section 10-5-24--17--d4910b2:1597e5fa31f:-8000:00000000000013D9-constants begin
// section 10-5-24--17--d4910b2:1597e5fa31f:-8000:00000000000013D9-constants end

/**
 * Short description of class b1_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class b1_view
    extends b_view
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
     parent::__construct();
     $this->load_language("b1");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_main()
    {
     return "huhu";
    }
}?>