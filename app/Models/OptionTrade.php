<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OptionTrade extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'option_trades';
    protected $fillable =
        [
            'name'
        ];
    public function value_trades()
    {
        return $this->hasMany(ValueTrade::class, 'option_trade_id');
    }
}
