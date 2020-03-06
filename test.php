<?php
declare(strict_types=1);

use Cscheide\ArticleExtractor\ArticleExtractor;

require_once 'vendor/autoload.php';

$extractor = new ArticleExtractor();
$response = $extractor->processURL('https://www.olx.pl/oferta/peugeot-407sw-2-0-hdi-2008r-osoba-prywatna-CID5-IDDT7eY.html');

echo "<pre>";
var_dump($response['text']);
echo "</pre>";
die;