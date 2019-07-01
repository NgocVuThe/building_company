<?php

namespace App\Repositories\ManagementRepository;

interface UserInterface
{
    public function getAll();

    public function getById($id);

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);
}