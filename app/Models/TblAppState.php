<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblAppState extends Model
{
    protected $fillable = ['state_code', 'current_state', 'request_state', 'request_volumn',
        'device_id', 'app_name', 'app_version', 'delete_flg'];

    public function device()
    {
        return $this->hasOne(TblDevice::class, 'device_id');
    }

    public function stateDescription()
    {
        return $this->hasMany(TblStateDescription::class, 'state_code');
    }
}
