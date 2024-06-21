<?php

namespace Arins\Services\Converter\Number;

use Arins\Services\Converter\Number\ConvertInterface;

class Convert implements ConvertInterface
{
    use ConvertStringToNumber;

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
