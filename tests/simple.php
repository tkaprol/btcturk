<?php

// SIMPLE USE

require_once '../lib/cryptsy/src/class.cryptsy.php';
require_once '../src/class.btcturk.php';

echo '<h1>Cryptsy</h1>';

$cryptsy = new cryptsy();

echo 'Volume for '.$cryptsy->getPrimaryCurrencyCode().' to '.$cryptsy->getSecondaryCurrencyCode().': ' . $cryptsy->getCurrentVolume() . '<br />';
echo 'Lowest Price for '.$cryptsy->getPrimaryCurrencyCode().' to '.$cryptsy->getSecondaryCurrencyCode().': ' . $cryptsy->getLowestPrice() . '<br />';
echo 'Highest Price for '.$cryptsy->getPrimaryCurrencyCode().' to '.$cryptsy->getSecondaryCurrencyCode().': ' . $cryptsy->getHighestPrice() . '<br />';
echo 'Latest Price for '.$cryptsy->getPrimaryCurrencyCode().' to '.$cryptsy->getSecondaryCurrencyCode().': ' . $cryptsy->getLatestPrice() . '<br />';

echo '<h1>BTCTurk</h1>';

$btcturk = new btcturk();

$market = $btcturk->getMarket();

echo 'Volume for BTC to TRY: ' . $market->Volume . '<br />';
echo 'Lowest Price for BTC to TRY: ' . $market->Low . '<br />';
echo 'Highest Price for BTC to TRY: ' . $market->High . '<br />';
echo 'Latest Price for BTC to TRY: ' . $market->Last . '<br />';
echo 'Asking Price for BTC to TRY: ' . $market->Ask . '<br />';
echo 'Bidding Price for BTC to TRY: ' . $market->Bid . '<br />';


// Alternatively you can use following functions if you just call API for one time only. 
// Therefore if you call API request more than one-time, 
// API will not response to requests made after first request.  

//echo 'Volume for BTC to TRY: ' . $btcturk->getCurrentVolume() . '<br />';
//echo 'Lowest Price for BTC to TRY: ' . $btcturk->getLowestPrice() . '<br />';
//echo 'Highest Price for BTC to TRY: ' . $btcturk->getHighestPrice() . '<br />';
//echo 'Latest Price for BTC to TRY: ' . $btcturk->getLatestPrice() . '<br />';
//echo 'Asking Price for BTC to TRY: ' . $btcturk->getAskingPrice() . '<br />';
//echo 'Bidding Price for BTC to TRY: ' . $btcturk->getBiddingPrice() . '<br />';

?>