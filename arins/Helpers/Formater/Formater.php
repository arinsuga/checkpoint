<?php

namespace Arins\Helpers\Formater;

use Arins\Helpers\Formater\FormaterInterface;
use Arins\Helpers\Formater\FormaterAbstract;

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
     * 0. Time Standard 2 Methods
     * ====================================================== */
    public function time($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.time'));
            } else {
                return $data->isoFormat(config('a1.date.time'));
            }

        }
        else
        {
            return '';
        }
    }
    
    public function timeampm($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.timeampm'));
            } else {
                return $data->isoFormat(config('a1.date.timeampm'));
            }

        }
        else
        {
            return '';
        }
    }

    /**
     * ======================================================
     * 1. Date Standard 3 Methods
     * ====================================================== */
    public function date($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.date'));
            } else {
                return $data->isoFormat(config('a1.date.date'));
            }

        }
        else
        {
            return '';
        }
    }

    public function datetime($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.datetime'));
            } else {
                return $data->isoFormat(config('a1.date.datetime'));
            }

        }
        else
        {
            return '';
        }
    }
    
    public function datetimeampm($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.datetimeampm'));
            } else {
                return $data->isoFormat(config('a1.date.datetimeampm'));
            }

        }
        else
        {
            return '';
        }
    }
    
    /**
     * ======================================================
     * 2. Kombinasi Bulan Standard 3 Methods
     * ====================================================== */
    public function dateMonth($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.datemonth'));
            } else {
                return $data->isoFormat(config('a1.date.datemonth'));
            }

        }
        else
        {
            return '';
        }
    }

    public function datetimeMonth($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.datetimemonth'));
            } else {
                return $data->isoFormat(config('a1.date.datetimemonth'));
            }

        }
        else
        {
            return '';
        }
    }

    public function datetimeAmpmMonth($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.datetimeampmmonth'));
            } else {
                return $data->isoFormat(config('a1.date.datetimeampmmonth'));
            }

        }
        else
        {
            return '';
        }
    }

    /**
     * ======================================================
     * 3. Kombinasi Bulan Short 3 Methods
     * ====================================================== */
    public function dateMonthshort($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.datemonthshort'));
            } else {
                return $data->isoFormat(config('a1.date.datemonthshort'));
            }

        }
        else
        {
            return '';
        }
    }

    public function datetimeMonthshort($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.datetimemonthshort'));
            } else {
                return $data->isoFormat(config('a1.date.datetimemonthshort'));
            }

        }
        else
        {
            return '';
        }
    }
    
    public function datetimeAmpmMonthshort($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.datetimeampmmonthshort'));
            } else {
                return $data->isoFormat(config('a1.date.datetimeampmmonthshort'));
            }

        }
        else
        {
            return '';
        }
    }
    

    /**
     * ======================================================
     * 4. Kombinasi Hari dan Bulan Standard 3 Methods
     * ====================================================== */
    public function dateMonthDay($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.datemonthday'));
            } else {
                return $data->isoFormat(config('a1.date.datemonthday'));
            }

        }
        else
        {
            return '';
        }
    }
    
    public function datetimeMonthDay($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.datetimemonthday'));
            } else {
                return $data->isoFormat(config('a1.date.datetimemonthday'));
            }

        }
        else
        {
            return '';
        }
    }
    
    public function datetimeAmpmMonthDay($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.datetimeampmmonthday'));
            } else {
                return $data->isoFormat(config('a1.date.datetimeampmmonthday'));
            }

        }
        else
        {
            return '';
        }
    }
    

    /**
     * ======================================================
     * 5. Kombinasi Hari dan Bulan Short 3 Methods
     * ====================================================== */
    public function dateMonthshortDay($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.datemonthshortday'));
            } else {
                return $data->isoFormat(config('a1.date.datemonthshortday'));
            }

        }
        else
        {
            return '';
        }
    }
    
    public function datetimeMonthshortDay($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.datetimemonthshortday'));
            } else {
                return $data->isoFormat(config('a1.date.datetimemonthshortday'));
            }

        }
        else
        {
            return '';
        }
    }
    
    public function datetimeAmpmMonthshortDay($data, $js=false)
    {
        if ( ($data != null) && ($data != ''))
        {
            if ($js){
                return $data->isoFormat(config('a1.datejs.datetimeampmmonthshortday'));
            } else {
                return $data->isoFormat(config('a1.date.datetimeampmmonthshortday'));
            }

        }
        else
        {
            return '';
        }
    }
    

}
