<?php

use PHPUnit\Framework\TestCase;
use Piki\MarcXml\Iterator\XmlFilter;

class XmlFilterTest extends TestCase
{
    public function testCanFilterXmlFiles()
    {
        $input = [
            "a.xml",
            "b.xml",
            "c.jpg",
            "d.html"
        ];

        $expected = [
            "a.xml",
            "b.xml"
        ];

        $filter = new XmlFilter(new ArrayIterator($input));
        $output = iterator_to_array($filter);

        $this->assertEquals($expected, $output);
    }
}

