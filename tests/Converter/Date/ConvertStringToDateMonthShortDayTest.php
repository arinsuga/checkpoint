<?php

namespace Tests\Converter\Date;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Arins\Facades\ConvertDate as Converter;
use Arins\Facades\Formater;

class ConvertStringToDateMonthShortDayTest extends TestCase
{

    /** Function ini optional dibuat jika ingin ada first initial */
    // protected function setUp():void
    // {
    //     parent::setUp();
    // }

    public function testDate()
    {

        $strTanggal = 'senin, 21-des-2020';
        $converter = Converter::strDateMonthShortDayToDate($strTanggal);

        $formater = 'Senin, 21-Des-2020';
        $formaterResult = Formater::dateMonthShortDay($converter);
        $this->assertEquals($formater, $formaterResult);
    }

    public function testDatetime()
    {
        $strTanggal = 'senin, 21-des-2020 13:25:47';
        $converter = Converter::strDatetimeMonthShortDayToDate($strTanggal);


        $formater = 'Senin, 21-Des-2020 13:25:47';
        $formaterResult = Formater::datetimeMonthShortDay($converter);

        $this->assertEquals($formater, $formaterResult);
    }

    public function testDatetimeAmpm()
    {
        $strTanggal = 'Senin, 21-des-2020 02:25:47 pm';
        $converter = Converter::strDatetimeAmpmMonthShortDayToDate($strTanggal);

        $formater = 'Senin, 21-Des-2020 02:25:47 siang';
        $formaterResult = Formater::datetimeAmpmMonthShortDay($converter);
        
        $this->assertEquals($formater, $formaterResult);
    }

}
