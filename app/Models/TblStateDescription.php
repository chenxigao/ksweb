<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblStateDescription extends Model
{
    protected $fillable = ['state_code', 'state_description', 'description_detail', 'delete_flg'];

    public function appState()
    {
        return $this->belongsTo(TblAppState::class, 'state_code');
    }
}
