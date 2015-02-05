<?php

namespace FoodPanda\CountryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\StreamedResponse;

class CountryController extends Controller
{
    public function indexAction( )
    {
        return $this->render( 'FoodPandaCountryBundle:Country:index.html.twig');
    }

    public function showAction()
    {
        $pastebin = $this->get('pastebin');
        $countryList = $pastebin->getList();
        return $this->render( 'FoodPandaCountryBundle:Country:show.html.twig', array( 'list' => $countryList ) );
    }

    public function downloadAction()
    {
        $pastebin = $this->get('pastebin');
        $countryList = $pastebin->getList();

        $response = new StreamedResponse();
        $response->setCallback( function () use ( $countryList ) {

            $handle = fopen( 'php://output', 'w+' );

            fputcsv( $handle, array( 'CountryName', 'CountryCode' ), ';' );
            // Add the data
            foreach ($countryList as $name => $code) {
                fputcsv( $handle, array(
                    $name,
                    $code
                ), ';' );
            }

            fclose( $handle );
        } );

        $response->setStatusCode( 200 );
        $response->headers->set( 'Content-Type', 'text/csv; charset=utf-8' );
        $response->headers->set( 'Content-Disposition', 'attachment; filename="countryList.csv"' );

        return $response;

    }

//    private function getList()
//    {
//        $rawCountryList = file_get_contents( 'http://pastebin.com/raw.php?i=943PQQ0n' );
//        $rawCountryList = implode( "\n", array_slice( explode( "\n", $rawCountryList ), 3 ) );
//        $rawCountryList = explode( "\r\n", $rawCountryList );
//        array_pop( $rawCountryList );
//        $countryList = [ ];
//
//        foreach ($rawCountryList as $country) {
//            $pair                  = explode( '  ', $country );
//            $countryList[$pair[1]] = $pair[0];
//        }
//        ksort( $countryList );
//        return $countryList;
//    }
}
