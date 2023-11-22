<?php

namespace App\Repository\Admin;

use App\Interface\Admin\ValueTradeInterface;
use App\Models\ValueTrade;

class ValueTradeRepository implements ValueTradeInterface
{
    public function list()
    {
        return ValueTrade::with('option_trade')->get();
    }

    public function getById($id)
    {
        return ValueTrade::where('id',$id)->with('option_trade')->first();
    }

    public function create(array $data)
    {
        $ot = new ValueTrade();
        $ot->name = $data['name'];
        $ot->option_trade_id = $data['option_trade_id'];
        return $ot->save();
    }

    public function update($id, array $data)
    {
        $ot = ValueTrade::find($id);
        $ot->name = $data['name'];
        $ot->option_trade_id = $data['option_trade_id'];
        return $ot->save();
    }

    public function delete($id)
    {
        return ValueTrade::find($id)->delete();
    }

    public function trash()
    {
        return ValueTrade::onlyTrashed()->get();
    }

    public function onlyTrash($id)
    {
        return ValueTrade::where('id', $id)->restore();
    }

    public function allTrash()
    {
        return ValueTrade::onlyTrashed()->restore();
    }
}
