<?php

namespace Arins\Helpers\Converter\Number;

use Carbon\Carbon;

trait ConvertStringToNumber
{

    protected function replaceData($data, $default, $system)
    {

        $result = str_replace(strtolower($default), strtolower($system), strtolower($data));

        return $result;
    }

    protected function constructData($data, $config)
    {
        $result = $data;
        $system = $config;
        $default = config('a1.number.default');
        
        $dataResult = $data;
        $dataResult = $this->replaceData($dataResult, ' ', '');
        foreach ($system as $id => $item)
        {
            $dataResult = $this->replaceData($dataResult, $default[$id], $item);
        } //end loop
        
        $result = $dataResult;

        return $result;
    }

    /**
     * ======================================================
     * 1. Date Standard 3 Methods
     * ====================================================== */
    public function strToNumber($data)
    {
        return $this->constructData($data, config('a1.number.system'));
    }

}
