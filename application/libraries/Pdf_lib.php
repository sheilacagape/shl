<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require the MAIN tcpdf class
//require ('../vendor/autoload.php');
require_once dirname(__file__).'/tcpdf/tcpdf.php';

class Pdf_lib extends TCPDF {
    
    protected $pdf;
    
    public function __construct()
    {
       $this->pdf =& get_instance(); 
    }
    
    
}

// END of Pdf_lib library