<?php
namespace Arins\Helpers\Formater;

interface FormaterInterface
{
    /**
     * ======================================================
     * 0. Time Standard 2 Methods
     * ====================================================== */
    public function time($data, $js=false);
    public function timeampm($data, $js=false);

    /**
     * ======================================================
     * 1. Date Standard 3 Methods
     * ====================================================== */
    public function date($data, $js=false);
    public function datetime($data, $js=false);
    public function datetimeampm($data, $js=false);
    
    /**
     * ======================================================
     * 2. Kombinasi Bulan Standard 3 Methods
     * ====================================================== */
    public function dateMonth($data, $js=false);
    public function datetimeMonth($data, $js=false);
    public function datetimeAmpmMonth($data, $js=false);

    /**
     * ======================================================
     * 3. Kombinasi Bulan Short 3 Methods
     * ====================================================== */
    public function dateMonthshort($data, $js=false);
    public function datetimeMonthshort($data, $js=false);
    public function datetimeAmpmMonthshort($data, $js=false);

    /**
     * ======================================================
     * 4. Kombinasi Hari dan Bulan Standard 3 Methods
     * ====================================================== */
    public function dateMonthDay($data, $js=false);
    public function datetimeMonthDay($data, $js=false);
    public function datetimeAmpmMonthDay($data, $js=false);

    /**
     * ======================================================
     * 5. Kombinasi Hari dan Bulan Short 3 Methods
     * ====================================================== */
    public function dateMonthshortDay($data, $js=false);
    public function datetimeMonthshortDay($data, $js=false);
    public function datetimeAmpmMonthshortDay($data, $js=false);
    
}
