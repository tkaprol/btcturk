<?php

class btcturk extends cryptsy {
    function __construct()
    {
        $this->apiUrl       = 'https://www.btcturk.com/api/ticker';
    }

    public function getMarket($marketKey = '', $marketLabel = ''){
        $return = $this->query();
        return $return;
    }

    public function getLatestPrice($marketKey = '', $marketLabel = ''){
        $return = $this->getMarket();
        if (isset($return->Message)) return 0;
        $return = $return->Last;
        return $return;
    }

    public function getLowestPrice($marketKey = '', $marketLabel = ''){
        $return = $this->getMarket();
        if (isset($return->Message)) return 0;
        $return = $return->Low;
        return $return;
    }

    public function getHighestPrice($marketKey = '', $marketLabel = ''){
        $return = $this->getMarket();
        if (isset($return->Message)) return 0;
        $return = $return->High;
        return $return;
    }

    public function getCurrentVolume($marketKey = '', $marketLabel = ''){
        $return = $this->getMarket();
        $return = $return->Volume;
        return $return;
    }

    public function getAskingPrice(){
        $return = $this->getMarket();
        if (isset($return->Message)) return 0;
        $return = $return->Ask;
        return $return;
    }

    public function getBiddingPrice(){
        $return = $this->getMarket();
        if (isset($return->Message)) return 0;
        $return = $return->Bid;
        return $return;
    }    
}