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
}
