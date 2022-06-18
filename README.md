# PHP Buscar Enderecos

Uma biblioteca para buscar a latitude e longitude através da api do Map Box

## Api MapBox

As APIs do map box são pagas, porém a uma quantidade de 100000 requisições FREE para teste.

Faça o cadastrastro  para obter token;

## Utilização

Para usar está biblioteca basta seguir os exemplos abaixo:

```Shell
$ composer require sandro/php-search-coordinates
```

```php
<?php

require __DIR__. '/vendor/autoload.php';

use SandroAmancio\Search\Coordinates;

$busca = new Coordinates();

$resultado = $busca->getCoordinatesFromAddress('Address', 'mytokenMapBox');

print_r($resultado);


```


## Requerimento

- PHP >= 7.0.0 