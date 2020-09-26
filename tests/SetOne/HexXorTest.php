<?php

namespace Tests\SetOne;

class HexXorTest extends BaseTestCase
{
    public function hexTestValues()
    {
        return [
            [
                [
                    '1234abcd',
                    'abcd1234',
                ],
                'b9f9b9f9'
            ],
            [
                [
                    '1c0111001f010100061a024b53535009181c',
                    '686974207468652062756c6c277320657965'
                ],
                '746865206b696420646f6e277420706c6179'
            ]
        ];
    }

    /**
     * @test
     * @dataProvider hexTestValues
     *
     * @param $hex
     * @param $base64
     */
    public function it_xors_2_hex_values($hexValues, $xorAnswer)
    {
        $this->assertEquals($xorAnswer, $this->testCase->hexXor($hexValues[0], $hexValues[1]));
    }
}