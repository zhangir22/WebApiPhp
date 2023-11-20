<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Income extends Authenticatable
{
   public $g_number;
   public $date;
   public $last_change_date;
   public $supplier_article;
   public $tech_size;
   public $barcode;
   public $total_price;
   public $discount_percent;
   public $is_supply;
   public $is_realization;
   public $promo_code_discount;
   public $warehouse_name;

   public $country_name;
   public $oblast_okrug_name;
   public $region_name;
   public $income_id;
   public $sale_id;
   public $odid;
   public $spp;
   public $for_pay;
   public $finished_price;
   public $price_with_disc;
   public $nm_id;
   public $subject;

   public $category;
   public $brand;
   public $is_storno;

}