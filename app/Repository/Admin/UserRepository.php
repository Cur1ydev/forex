<?php

namespace App\Repository\Admin;

use App\Interface\Admin\UserInterface;
use App\Models\Comment;
use App\Models\User;

class UserRepository implements UserInterface
{
    public function list()
    {
        return User::paginate(10);
    }

    public function delete($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('error');
        }
        Comment::where('user_id', $id)->delete();
        return $user->delete();

    }
}
