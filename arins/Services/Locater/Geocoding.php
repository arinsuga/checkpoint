<?php

namespace Arins\Services\Locater;

use Arins\Services\Locater\LocaterInterface;
use Arins\Services\Locater\Locater;

class Geocoding extends Locater implements LocaterInterface
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
     * Basic
     * ====================================================== */
    public function locate($par1 = null)
    {
        $host = $par1;

        //fetch api/webservices
        $response = $this->fetch($host);

        return json_decode($response);
    } //end method

} //end class
