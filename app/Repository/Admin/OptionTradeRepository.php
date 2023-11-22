<?php

namespace App\Repository\Admin;

use App\Interface\Admin\OptionTradeInterface;
use App\Models\OptionTrade;

class OptionTradeRepository implements OptionTradeInterface
{
    public function list()
    {
        return OptionTrade::with('value_trades')->get();
    }

    public function getById($id)
    {
        return OptionTrade::find($id);
    }

    public function create(array $data)
    {
        $ot = new OptionTrade();
        $ot->name = $data['name'];
        return $ot->save();
    }

    public function update($id, array $data)
    {
        $ot = OptionTrade::find($id);
        $ot->name = $data['name'];
        return $ot->save();
    }

    public function delete($id)
    {
        return OptionTrade::find($id)->delete();
    }

    public function trash()
    {
        return OptionTrade::onlyTrashed()->get();
    }

    public function onlyTrash($id)
    {
        return OptionTrade::where('id', $id)->restore();
    }

    public function allTrash()
    {
        return OptionTrade::onlyTrashed()->restore();
    }
}
