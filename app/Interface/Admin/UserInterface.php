<?php

namespace App\Interface\Admin;

interface UserInterface
{
    public function list();
    public function delete($id);
}
