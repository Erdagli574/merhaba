<?php


use Herdagli\Merhaba\Dunya;
use PHPUnit\Framework\TestCase;

class DunyaTest extends TestCase
{

    public function testMerhaba()
    {
        $dunya = new Dunya();
        $this->assertEquals('Merhaba dünya!',$dunya->merhaba());
    }
}
