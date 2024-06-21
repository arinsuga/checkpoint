<?php

namespace Arins\Services\Formater;

use Arins\Services\Formater\FormaterInterface;
use Arins\Services\Formater\FormaterAbstract;

class Formater implements FormaterInterface
{
    protected $result;

    /**
     * Comment template.
     *
     * @param  boolean     $par1
     * @param  int         $par2
     * @param  string      $par3
     * @param  string|null $par4
     * @param  mixed|null  $par5
     * @return array|string|int|boolean
     */


    public function __construct()
    {
    }

    /**
     * ======================================================
     * 1. Time 2 Methods
     * ====================================================== */
    public function time($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.time'));
    }
    
    public function timeampm($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.timeampm'));
    }

    /**
     * ======================================================
     * 1. Date Standard 3 Methods
     * ====================================================== */
    public function date($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.date'));
    }

    public function datetime($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.datetime'));
    }
    
    public function datetimeampm($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.datetimeampm'));
    }
    
    /**
     * ======================================================
     * 2. Kombinasi Bulan Standard 3 Methods
     * ====================================================== */
    public function dateMonth($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.datemonth'));
    }

    public function datetimeMonth($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.datetimemonth'));
    }

    public function datetimeAmpmMonth($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.datetimeampmmonth'));
    }

    /**
     * ======================================================
     * 3. Kombinasi Bulan Short 3 Methods
     * ====================================================== */
    public function DateMonthshort($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.datemonthshort'));
    }

    public function DatetimeMonthshort($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.datetimemonthshort'));
    }
    
    public function DatetimeAmpmMonthshort($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.datetimeampmmonthshort'));
    }
    

    /**
     * ======================================================
     * 4. Kombinasi Hari dan Bulan Standard 3 Methods
     * ====================================================== */
    public function DateMonthDay($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.datemonthday'));
    }
    
    public function DatetimeMonthDay($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.datetimemonthday'));
    }
    
    public function DatetimeAmpmMonthDay($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.datetimeampmmonthday'));
    }
    

    /**
     * ======================================================
     * 5. Kombinasi Hari dan Bulan Short 3 Methods
     * ====================================================== */
    public function DateMonthshortDay($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.datemonthshortday'));
    }
    
    public function DatetimeMonthshortDay($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.datetimemonthshortday'));
    }
    
    public function DatetimeAmpmMonthshortDay($data)
    {
        if ($data == null)
        {
            return null;
        } //end if

        return $data->isoFormat(config('a1.date.datetimeampmmonthshortday'));
    }
    

}
