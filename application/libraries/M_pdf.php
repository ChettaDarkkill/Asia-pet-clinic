<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once APPPATH.'/third_party/mpdf/mpdf.php';

class M_pdf {

    public $param;
    public $pdf;

    public function __construct($param = '"th","A4","","",10,10,10,10,6,3')
    {
        $this->param =$param;
        $this->pdf = new mPDF("th","A4-L","0", "");
        //$this->pdf->SetAutoFont(AUTOFONT_THAIVIET);
    }
}
