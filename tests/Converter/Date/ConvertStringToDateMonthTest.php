<?php

namespace Tests\Converter\Date;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Arins\Facades\ConvertDate as Converter;
use Arins\Facades\Formater;

class ConvertStringToDateMonthTest extends TestCase
{

    /** Function ini optional dibuat jika ingin ada first initial */
    // protected function setUp():void
    // {
    //     parent::setUp();
    // }

    public function testDate()
    {

        $strTanggal = '21 desember 2020';
        $converter = Converter::strDateMonthToDate($strTanggal);

        $formater = '21 Desember 2020';
        $formaterResult = Formater::dateMonth($converter);
        $this->assertEquals($formater, $formaterResult);
    }

    public function testDatetime()
    {
        $strTanggal = '21 desember 2020 13:25:47';
        $converter = Converter::strDatetimeMonthToDate($strTanggal);


        $formater = '21 Desember 2020 13:25:47';
        $formaterResult = Formater::datetimeMonth($converter);

        $this->assertEquals($formater, $formaterResult);
    }

    public function testDatetimeAmpm()
    {
        $strTanggal = '21 desember 2020 02:25:47 pm';
        $converter = Converter::strDatetimeAmpmMonthToDate($strTanggal);

        $formater = '21 Desember 2020 02:25:47 siang';
        $formaterResult = Formater::datetimeAmpmMonth($converter);
        
        $this->assertEquals($formater, $formaterResult);
    }

}
