<?php

namespace Tests\Converter\Date;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Arins\Facades\ConvertDate as Converter;
use Arins\Facades\Formater;

class ConvertStringToDateTest extends TestCase
{

    /** Function ini optional dibuat jika ingin ada first initial */
    // protected function setUp():void
    // {
    //     parent::setUp();
    // }

    public function testDate()
    {

        $strTanggal = '21/12/2020';
        $converter = Converter::strDateToDate($strTanggal);

        $formater = $strTanggal;
        $formaterResult = Formater::date($converter);
        $this->assertEquals($formater, $formaterResult);
    }

    public function testDatetime()
    {
        $strTanggal = '21/12/2020 13:25:47';
        $converter = Converter::strDatetimeToDate($strTanggal);


        $formater = $strTanggal;
        $formaterResult = Formater::datetime($converter);

        $this->assertEquals($formater, $formaterResult);
    }

    public function testDatetimeAmpm()
    {
        $strTanggal = '21/12/2020 02:25:47 pm';
        $converter = Converter::strDatetimeAmpmToDate($strTanggal);

        $formater = '21/12/2020 02:25:47 siang';
        $formaterResult = Formater::datetimeAmpm($converter);
        
        $this->assertEquals($formater, $formaterResult);
    }

}
