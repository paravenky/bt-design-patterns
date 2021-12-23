<?php

namespace App\Http\Controllers\Stocks;

use App\Http\Controllers\Controller;
use App\Interfaces\StockMarketInterface;

class EconomicTimesController implements StockMarketInterface
{
    public function getData() {
            return 'Data from Economic Times Website';
    }

}