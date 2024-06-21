<?php

namespace Tests\Converter\Date;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Arins\Facades\ConvertDate as Converter;
use Arins\Facades\Formater;

class ConvertStringToDateMonthShortTest extends TestCase
{

    /** Function ini optional dibuat jika ingin ada first initial */
    // protected function setUp():void
    // {
    //     parent::setUp();
    // }

    public function testDate()
    {

        $strTanggal = '21-des-2020';
        $converter = Converter::strDateMonthShortToDate($strTanggal);

        $formater = '21-Des-2020';
        $formaterResult = Formater::dateMonthShort($converter);
        $this->assertEquals($formater, $formaterResult);
    }

    public function testDatetime()
    {
        $strTanggal = '21-des-2020 13:25:47';
        $converter = Converter::strDatetimeMonthShortToDate($strTanggal);


        $formater = '21-Des-2020 13:25:47';
        $formaterResult = Formater::datetimeMonthShort($converter);

        $this->assertEquals($formater, $formaterResult);
    }

    public function testDatetimeAmpm()
    {
        $strTanggal = '21-des-2020 02:25:47 pm';
        $converter = Converter::strDatetimeAmpmMonthShortToDate($strTanggal);

        $formater = '21-Des-2020 02:25:47 siang';
        $formaterResult = Formater::datetimeAmpmMonthShort($converter);
        
        $this->assertEquals($formater, $formaterResult);
    }

}
