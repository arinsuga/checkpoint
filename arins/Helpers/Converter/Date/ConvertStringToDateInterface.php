<?php
namespace Arins\Helpers\Converter\Date;

interface ConvertStringToDateInterface
{
    /**
     * ======================================================
     * 1. Date Standard 3 Methods
     * ====================================================== */
    public function strDateToDate($data);
    public function strDatetimeToDate($data);
    public function strDatetimeampmToDate($data);
    
    /**
     * ======================================================
     * 2. Kombinasi Bulan Standard 3 Methods
     * ====================================================== */
    public function strDateMonthToDate($data);
    public function strDatetimeMonthToDate($data);
    public function strDatetimeAmpmMonthToDate($data);

    /**
     * ======================================================
     * 3. Kombinasi Bulan Short 3 Methods
     * ====================================================== */
    public function strDateMonthshortToDate($data);
    public function strDatetimeMonthshortToDate($data);
    public function strDatetimeAmpmMonthshortToDate($data);

    /**
     * ======================================================
     * 4. Kombinasi Hari dan Bulan Standard 3 Methods
     * ====================================================== */
    public function strDateMonthDayToDate($data);
    public function strDatetimeMonthDayToDate($data);
    public function strDatetimeAmpmMonthDayToDate($data);

    /**
     * ======================================================
     * 5. Kombinasi Hari dan Bulan Short 3 Methods
     * ====================================================== */
    public function strDateMonthshortDayToDate($data);
    public function strDatetimeMonthshortDayToDate($data);
    public function strDatetimeAmpmMonthshortDayToDate($data);

}
