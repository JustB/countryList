<?php

namespace FoodPanda\CountryBundle;

/**
 * Class Pastebin
 *
 * Retrieves a file from pastebin
 *
 * @package FoodPanda\CountryBundle
 */
class Pastebin {
    public function getList()
    {
        $rawCountryList = file_get_contents( 'http://pastebin.com/raw.php?i=943PQQ0n' );

        $rawCountryList = implode( "\n", array_slice( explode( "\n", $rawCountryList ), 3 ) );
        $rawCountryList = explode( "\r\n", $rawCountryList );
        array_pop( $rawCountryList );
        $countryList = [ ];

        foreach ($rawCountryList as $country) {
            $pair                  = explode( '  ', $country );
            $countryList[$pair[1]] = $pair[0];
        }
        ksort( $countryList );
        return $countryList;
    }
} 