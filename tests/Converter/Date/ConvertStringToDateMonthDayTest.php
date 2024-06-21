<?php

namespace Tests\Converter\Date;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Arins\Facades\ConvertDate as Convert;
use Arins\Facades\Formater;

class ConvertStringToDateMonthDayTest extends TestCase
{

    /** Function ini optional dibuat jika ingin ada first initial */
    // protected function setUp():void
    // {
    //     parent::setUp();
    // }

    public function testDate()
    {
        $strTanggal = 'senin, 21 desember 2020';
        $converter = Convert::strDateMonthDayToDate($strTanggal);

        $formater = 'Senin, 21 Desember 2020';
        $formaterResult = Formater::dateMonthDay($converter);
        $this->assertEquals($formater, $formaterResult);
    }

    public function testDatetime()
    {
        $strTanggal = 'senin, 21 desember 2020 13:25:47';
        $converter = Convert::strDatetimeMonthDayToDate($strTanggal);


        $formater = 'Senin, 21 Desember 2020 13:25:47';
        $formaterResult = Formater::datetimeMonthDay($converter);

        $this->assertEquals($formater, $formaterResult);
    }

    public function testDatetimeAmpm()
    {
        $strTanggal = 'senin, 21 desember 2020 02:25:47 pm';
        $converter = Convert::strDatetimeAmpmMonthDayToDate($strTanggal);

        $formater = 'Senin, 21 Desember 2020 02:25:47 siang';
        $formaterResult = Formater::datetimeAmpmMonthDay($converter);
        
        $this->assertEquals($formater, $formaterResult);
    }

}
