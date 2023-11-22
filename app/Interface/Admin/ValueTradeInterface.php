<?php

namespace App\Interface\Admin;

interface ValueTradeInterface
{
    public function list();

    public function getById($id);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);

    public function trash();

    public function onlyTrash($id);

    public function allTrash();
}
