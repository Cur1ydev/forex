<?php

namespace App\Repository\Admin;

use App\Interface\Admin\AuthCourseInterface;
use App\Models\RegisterCourse;

class AuthCourseRepository implements AuthCourseInterface
{
    public function list()
    {
        return RegisterCourse::orderBy('created_at','desc')->get();
    }

    public function getById($id)
    {
        return RegisterCourse::find($id);
    }

    public function create(array $data)
    {
        $rc = new RegisterCourse();
        $rc->name = $data['name'];
        $rc->email = $data['email'];
        $rc->phone_number = $data['phone_number'];
        $rc->option = $data['option'];
        return $rc->save();
    }

    public function update($id, array $data)
    {
        $rc = RegisterCourse::find($id);
        $rc->name = $data['name'];
        $rc->email = $data['email'];
        $rc->phone_number = $data['phone_number'];
        $rc->option = $data['option'];
        return $rc->save();
    }

    public function delete($id)
    {
        $regist = RegisterCourse::query()->findOrFail($id);
        return $regist?->delete();
    }

    public function trash()
    {
        return RegisterCourse::onlyTrashed()->get();
    }

    public function onlyTrash($id)
    {
        return RegisterCourse::where('id', $id)->restore();
    }

    public function allTrash()
    {
        return RegisterCourse::onlyTrashed()->restore();
    }
}
