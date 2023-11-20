<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Income extends Authenticatable
{
   public $income_id;
   public $number;
   public $date;
   public $last_change_date;
   public $supplier_article;
   public $tech_size;
   public $barcode;
   public $quantity;
   public $total_price;
   public $date_close;
   public $warehouse_name;
   public $nm_id;

}