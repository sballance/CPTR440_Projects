<?php

namespace Source\ProjectOne;

class SetOne
{
    /**
     * Challenge 1
     *
     * @param string $hex
     * @return string
     */
    public function hexToBase64(string $hex): string
    {
        return base64_encode(hex2bin($hex));
    }

    /**
     * Challenge 2
     *
     * @param string $hex1
     * @param string $hex2
     * @return string
     */
    public function hexXor(string $hex1, string $hex2): string
    {
        $binaryXor = (hex2bin($hex1) ^ hex2bin($hex2));
        return bin2hex($binaryXor);
    }
}