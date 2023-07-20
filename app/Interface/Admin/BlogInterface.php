<?php

namespace App\Interface\Admin;

interface BlogInterface
{
    public function list();

    public function getById($id);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);
}
