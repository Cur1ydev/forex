<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interface\Admin\ValueTradeInterface;
use App\Models\OptionTrade;
use App\Models\ValueTrade;
use Illuminate\Http\Request;

class ValueTradeController extends Controller
{
    protected $valueTrade;

    public function __construct(ValueTradeInterface $valueTrade)
    {
        $this->valueTrade = $valueTrade;
    }

    public function list()
    {
        $valueTrades = $this->valueTrade->list();
        return view('admin.valueTrade.list', compact('valueTrades'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $rule =
                [
                    'name' => 'required',
                    'option_trade_id' => 'required'
                ];
            $message =
                [
                    'name.required' => 'Tên nội dung đầu tư phải được nhập',
                    'option_trade_id.required' => 'Tên tùy chọn phải được chọn'
                ];
            $request->validate($rule, $message);
            $data = [
                'name' => $request->name,
                'option_trade_id' => $request->option_trade_id
            ];
            $this->valueTrade->create($data);

            return redirect()->route('admin.valueTrade.list');
        }
        $categoryTrade = OptionTrade::all();
        return view('admin.valueTrade.create',compact('categoryTrade'));
    }

    public function update(Request $request)
    {
        if ($request->isMethod('post')) {
            $rule =
                [
                    'name' => 'required',
                    'option_trade_id' => 'required'
                ];
            $message =
                [
                    'name.required' => 'Tên nội dung đầu tư phải được nhập',
                    'option_trade_id.required' => 'Tên tùy chọn phải được chọn'
                ];
            $request->validate($rule, $message);
            $data = [
                'name' => $request->name,
                'option_trade_id' => $request->option_trade_id
            ];
            $this->valueTrade->update($request->id, $data);
            return redirect()->route('admin.valueTrade.list');
        }
        $valueTrade = $this->valueTrade->getById($request->id);
        $categoryTrade = OptionTrade::all();
        return view('admin.valueTrade.update', compact('valueTrade','categoryTrade'));
    }

    public function delete(Request $request)
    {
        $this->valueTrade->delete($request->id);
        return redirect()->route('admin.valueTrade.list');
    }

    public function trash()
    {
        $trash = $this->valueTrade->trash();
        return view('admin.valueTrade.trash', compact('trash'));
    }

    public function storeOnlyTrash(Request $request)
    {
        $this->valueTrade->onlyTrash($request->id);
        return redirect()->route('admin.valueTrade.list');
    }

    public function storeAllTrash()
    {
        $this->valueTrade->allTrash();
        return redirect()->route('admin.valueTrade.list');
    }
}
