<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController
{
    public function listIncome(IncomeRequest $request) : IncomesCollection
    {
        return new IncomesCollection(
            Filter::searchByIncomeRequest($request)->paginate($request->limit ?? 500));
    }
    public function listOrder(OrderRequest $request) : OrdersCollection
    {
        return new OrdersCollection(Filter::searchByOrderRequest($request)->paginate($request->limit ?? 500));
    }
    public function listSale(SaleRequest  $request) : SalesCollection
    {
        return new SalesCollection(Filter::searchBySaleRequest($request)->paginate($request->limit ?? 500));
    }
    public function listStock(StockRequest  $request) : StocksCollection
    {
        return new StocksCollection(Filter::searchByStockRequest($request)->paginate($request->limit ?? 500));
    }
}
