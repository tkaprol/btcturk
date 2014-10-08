btcturk
=======

A PHP Class to get Bitcoin exchange rates in BTCTurk.com's market.

BTCTurk class extends Cryptsy.com's class. If you want to use Cryptsy.com class too, then you need to create an API key and secret. Please check cryptsy project documentation for further information.

How Do I Use It?
=======
Just include class into your project and call desired function. Check tests/simple.php

Known Issues
=======
* BTCTurk.com API has a request limit. You shouldn't request XML more than one otherwise API will throw an error and values will return as zero. If you plan to use API requests in a live system, please consider to cache the value. 
