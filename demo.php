<?php

// This is a live demonstration on how to use the library

require_once dirname(__FILE__) . '/vendor/autoload.php';
// or if you don't use autoloading:
// require_once dirname(__FILE__) . '/src/MetarDecoder.inc.php';

use MetarDecoder\MetarDecoder;

$raw_metar = 'METAR LFPG 212205Z';

print('Demo, decoding raw metar "'.$raw_metar.'"'.PHP_EOL);

$decoder = new MetarDecoder();
$decoded_metar = $decoder->parse($raw_metar);

print('Report type: '.$decoded_metar->getType().PHP_EOL);
print('ICAO: '.$decoded_metar->getIcao().PHP_EOL);
print('Day: '.$decoded_metar->getDay().PHP_EOL);
print('Time: '.$decoded_metar->getTime()->format('H:i').' UTC'.PHP_EOL);
