<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interface\Admin\OptionTradeInterface;
use Illuminate\Http\Request;

class OptionTradeController extends Controller
{
    protected $optionTrade;

    public function __construct(OptionTradeInterface $optionTrade)
    {
        $this->optionTrade = $optionTrade;
    }

    public function list()
    {
        $optionTrades = $this->optionTrade->list();
        return view('admin.optionTrade.list', compact('optionTrades'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $rule =
                [
                    'name' => 'required',
                ];
            $message =
                [
                    'name.required' => 'Tên nội dung đầu tư phải được nhập',
                ];
            $request->validate($rule, $message);
            $data = [
                'name' => $request->name,
            ];
            $this->optionTrade->create($data);
            return redirect()->route('admin.optionTrade.list');
        }
        return view('admin.optionTrade.create');
    }

    public function update(Request $request)
    {
        if ($request->isMethod('post')) {
            $rule =
                [
                    'name' => 'required',
                ];
            $message =
                [
                    'name.required' => 'Tên nội dung đầu tư phải được nhập',
                ];
            $request->validate($rule, $message);
            $data = [
                'name' => $request->name,
            ];
            $this->optionTrade->update($request->id, $data);
            return redirect()->route('admin.optionTrade.list');
        }
        $optionTrade = $this->optionTrade->getById($request->id);
        return view('admin.optionTrade.update', compact('optionTrade'));
    }

    public function delete(Request $request)
    {
        $this->optionTrade->delete($request->id);
        return redirect()->route('admin.optionTrade.list');
    }

    public function trash()
    {
        $trash = $this->optionTrade->trash();
        return view('admin.optionTrade.trash', compact('trash'));
    }

    public function storeOnlyTrash(Request $request)
    {
        $this->optionTrade->onlyTrash($request->id);
        return redirect()->route('admin.optionTrade.list');
    }

    public function storeAllTrash()
    {
        $this->optionTrade->allTrash();
        return redirect()->route('admin.optionTrade.list');
    }
}
