<?php

require 'vendor/autoload.php';


use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client;
use Alura\BuscadorDeCursos\Buscador;

$client = new Client(['base_uri' => 'https://www.alura.com.br/', 'verify' => false]);
$crawler = new Crawler();

// $cursos = $crawler->filter('span.card-curso__nome');

$buscador = new Buscador($client,$crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach($cursos as $curso){
    echo $curso . PHP_EOL;
}
