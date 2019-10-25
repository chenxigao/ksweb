<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblDevice extends Model
{
    protected $fillable = ['device_code', 'device_sn', 'model_name', 'delete_flg', 'shop_id'];

    public function appState()
    {
        return $this->belongsTo(TblAppState::class, 'device_id');
    }
}
