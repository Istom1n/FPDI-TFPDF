<?php
require_once('tfpdf.php');
class FPDF extends tFPDF
{
    /**
     * "Remembers" the template id of the imported page
     */
    protected $_tplIdx;
}