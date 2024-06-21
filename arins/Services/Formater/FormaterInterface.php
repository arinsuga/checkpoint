<?php
namespace Arins\Services\Formater;

interface FormaterInterface
{
    /**
     * ======================================================
     * 1. Time 2 Methods
     * ====================================================== */
    public function time($data);
    public function timeampm($data);

    /**
     * ======================================================
     * 1. Date Standard 3 Methods
     * ====================================================== */
    public function Date($data);
    public function Datetime($data);
    public function Datetimeampm($data);
    
    /**
     * ======================================================
     * 2. Kombinasi Bulan Standard 3 Methods
     * ====================================================== */
    public function DateMonth($data);
    public function DatetimeMonth($data);
    public function DatetimeAmpmMonth($data);

    /**
     * ======================================================
     * 3. Kombinasi Bulan Short 3 Methods
     * ====================================================== */
    public function DateMonthshort($data);
    public function DatetimeMonthshort($data);
    public function DatetimeAmpmMonthshort($data);

    /**
     * ======================================================
     * 4. Kombinasi Hari dan Bulan Standard 3 Methods
     * ====================================================== */
    public function DateMonthDay($data);
    public function DatetimeMonthDay($data);
    public function DatetimeAmpmMonthDay($data);

    /**
     * ======================================================
     * 5. Kombinasi Hari dan Bulan Short 3 Methods
     * ====================================================== */
    public function DateMonthshortDay($data);
    public function DatetimeMonthshortDay($data);
    public function DatetimeAmpmMonthshortDay($data);
    
}
