<?php

namespace App\Filters;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Builder;

interface FilterInterface
{
    public static function searchByIncomeRequest (FormRequest $request): Builder;
    public static function searchByOrderRequest (FormRequest $request): Builder;
    public static function searchBySaleRequest (FormRequest $request): Builder;
    public static function searchByStockRequest (FormRequest $request): Builder;

}