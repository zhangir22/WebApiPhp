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
   public $warehouse_name;
   public $oblast;
   public $income_id;
   public $odid;

   public $nm_id;
   public $subject;
   public $category;
   public $brand;
   public $is_cancel;
   public $cancel_dt;


}