<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interfaces\StockMarketInterface;

class StockDataController extends Controller
{
    public function index(StockMarketInterface $stock) {
            return $stock->getData();
    }

}