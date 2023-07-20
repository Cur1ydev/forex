<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interface\Admin\UserInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function list()
    {
        $users = $this->user->list();
        return view('admin.user', compact('users'));
    }

    public function delete(Request $request)
    {
        $this->user->delete($request->id);
        return redirect()->route('admin.user.list');

    }
}
