<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblShop extends Model
{
    protected $fillable = ['shop_code', 'shop_name', 'delete_flg'];
}
