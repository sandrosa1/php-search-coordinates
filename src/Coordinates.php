<?php
namespace SandroAmancio\Search;

/**
 * Reponsavél por buscar o endereço clompleto atráves do cep
 */
class Coordinates{




    /**
     * URL base divida em duas partes, do map box para retornar um par de coordenadas
     *
     * @var string
     */
    private $urlpart1 = "https://api.mapbox.com/geocoding/v5/mapbox.places/";

     /**
     * URL base do parte 2
     *
     * @var string
     */
    private $urlpart2 = ".json?limit=1&types=place%2Cpostcode%2Caddress&access_token=";
   
    /**
     * Função que traz o jsoncom o cep enviado e retorna um array
     *
     * @param string $zipCode
     * @return array
     */
    public function getCoordinatesFromAddress(string $address, string $tokenMapBox): array{


        $get = file_get_contents($this->urlpart1 . $address . $this->urlpart2 . $tokenMapBox);

        $result = (array) json_decode($get);

        $result2 = (array)$result['features'][0];

        $result3 = (array) $result2['geometry'];

        return (array) $result3['coordinates'];
    }

}

