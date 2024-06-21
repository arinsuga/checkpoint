<?php

namespace Arins\Helpers\Converter\Date;

use Arins\Helpers\Converter\Date\ConvertInterface;
use Carbon\Carbon;

class Convert implements ConvertInterface
{
    use ConvertStringToDate;

    protected $result;
    protected $translationPrefixKey;

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

}
