<?php

namespace Tests\Converter\Number;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Arins\Facades\ConvertNumber as Converter;
use Arins\Facades\Formater;

class ConvertStringToNumberTest extends TestCase
{

    /** Function ini optional dibuat jika ingin ada first initial */
    // protected function setUp():void
    // {
    //     parent::setUp();
    // }

    public function testNumber()
    {

        $source = 'Rp. 25,458,241.67,-';
        $result = Converter::strToNumber($source);
        $assert = '25458241.67';

        $this->assertEquals($assert, $result);
    }

}
