<?php

namespace Arins\Services\Converter\Date;

use Carbon\Carbon;

trait ConvertStringToDate
{

    protected function replaceIso($data, $config)
    {
        $result = $data;

        foreach ($config as $id => $item)
        {
            $result = ucwords(str_replace(strtolower($id), strtolower($item), strtolower($result)));
        } //end loop

        return $result;
    }

    protected function constructDate($data, $format)
    {
        $result = null;
        $config = config('a1.date.iso');
        
        $isoFormat = $data;
        foreach ($config as $id => $item)
        {
            $isoFormat = $this->replaceIso($isoFormat, $item);

        } //end loop
        
        $result = Carbon::createFromIsoFormat($format, $isoFormat);

        return $result;
    }

    /**
     * ======================================================
     * 1. Date Standard 3 Methods
     * ====================================================== */
    public function strDateToDate($data)
    {
        $result = null;

        if (isset($data)) {
            $tempDate = $this->constructDate($data, config('a1.date.date'));
            $result = Carbon::create($tempDate->year, $tempDate->month, $tempDate->day, 0, 0, 0);
        } //end if

        // return $this->constructDate($data, config('a1.date.date'));
        return $result;
    }

    public function strDatetimeToDate($data)
    {
        return $this->constructDate($data, config('a1.date.datetime'));
    }

    public function strDatetimeAmpmToDate($data)
    {
        return $this->constructDate($data, config('a1.date.datetimeampm'));
    }

    /**
     * ======================================================
     * 2. Kombinasi Bulan Standard 3 Methods
     * ====================================================== */
    public function strDateMonthToDate($data)
    {

        return $this->constructDate($data, config('a1.date.datemonth'));
    }

    public function strDatetimeMonthToDate($data)
    {
        return $this->constructDate($data, config('a1.date.datetimemonth'));
    }

    public function strDatetimeAmpmMonthToDate($data)
    {
        return $this->constructDate($data, config('a1.date.datetimeampmmonth'));
    }

    /**
     * ======================================================
     * 3. Kombinasi Bulan Short 3 Methods
     * ====================================================== */
    public function strDateMonthShortToDate($data)
    {
        return $this->constructDate($data, config('a1.date.datemonthshort'));
    }

    public function strDatetimeMonthShortToDate($data)
    {
        return $this->constructDate($data, config('a1.date.datetimemonthshort'));
    }

    public function strDatetimeAmpmMonthShortToDate($data)
    {
        return $this->constructDate($data, config('a1.date.datetimeampmmonthshort'));
    }

    /**
     * ======================================================
     * 4. Kombinasi Hari dan Bulan Standard 3 Methods
     * ====================================================== */
    public function strDateMonthDayToDate($data)
    {

        return $this->constructDate($data, config('a1.date.datemonthday'));
    }

    public function strDatetimeMonthDayToDate($data)
    {
        return $this->constructDate($data, config('a1.date.datetimemonthday'));
    }

    public function strDatetimeAmpmMonthDayToDate($data)
    {
        return $this->constructDate($data, config('a1.date.datetimeampmmonthday'));
    }

    /**
     * ======================================================
     * 5. Kombinasi Hari dan Bulan Short 3 Methods
     * ====================================================== */
    public function strDateMonthShortDayToDate($data)
    {
        return $this->constructDate($data, config('a1.date.datemonthshortday'));
    }

    public function strDatetimeMonthShortDayToDate($data)
    {
        return $this->constructDate($data, config('a1.date.datetimemonthshortday'));
    }

    public function strDatetimeAmpmMonthShortDayToDate($data)
    {
        return $this->constructDate($data, config('a1.date.datetimeampmmonthshortday'));
    }

}
