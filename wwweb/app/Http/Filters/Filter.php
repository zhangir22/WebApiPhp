<?php

namespace App\Filters;

use App\Models\Order;
use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class Filter implements FilterInterface
{
    public static function searchByIncomeRequest (FormRequest $request): Builder
    {
        return Order::query()
            ->whereBetween('date', [
                $request->dateFrom,
                $request->dateTo,
            ]);
    }
    public static function searchByOrderRequest (FormRequest $request): Builder
    {
        return Order::query()
            ->whereBetween('date', [
                $request->dateFrom,
                $request->dateTo,
            ]);
    }
    public static function searchBySaleRequest (FormRequest $request): Builder
    {
        return Sale::query()
            ->whereBetween('date', [
                $request->dateFrom,
                $request->dateTo,
            ]);
    }
    public static function searchByStockRequest (FormRequest $request): Builder
    {
        return Stock::query()->whereBetween('created_at', [
            $request->dateFrom,
            Carbon::tomorrow()->format('Y-m-d H:i:s'),
        ]);
    }
}