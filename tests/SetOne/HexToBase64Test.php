<?php

namespace Tests\SetOne;

class HexToBase64Test extends BaseTestCase
{
    public function hexTestValues()
    {
        return [
            [
                '1234abcd',
                'EjSrzQ=='
            ],
            [
                '49276d206b696c6c696e6720796f757220627261696e206c696b65206120706f69736f6e6f7573206d757368726f6f6d',
                'SSdtIGtpbGxpbmcgeW91ciBicmFpbiBsaWtlIGEgcG9pc29ub3VzIG11c2hyb29t'
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
    public function it_converts_hex_to_base_64($hex, $base64)
    {
        $this->assertEquals($base64, $this->testCase->hexToBase64($hex));
    }
}