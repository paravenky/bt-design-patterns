<?php

namespace App\Http\Controllers\Stocks;

use App\Http\Controllers\Controller;
use App\Interfaces\StockMarketInterface;

class MoneyControlController implements StockMarketInterface
{
    public function getData() {
            return 'Data from Money Control Website';
    }

}