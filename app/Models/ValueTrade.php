<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ValueTrade extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'value_trades';
    protected $fillable =
        [
            'name',
            'option_trade_id'
        ];

    public function option_trade()
    {
        return $this->belongsTo(OptionTrade::class, 'option_trade_id');
    }
}
