<?php

namespace App\Controllers\DAO;

use App\Models\UniversityModel;
use App\Controllers\BaseController;

class University extends BaseController
{
    private static ?University $instance = null;
    private UniversityModel $model;

    private function __construct()
    {
        $this->model = new UniversityModel();
    }

    public static function getInstance(): University
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function getAll(): array
    {
        return self::getInstance()->model->findAll();
    }

    public static function getById(int $id): ?array
    {
        return self::getInstance()->model->find($id);
    }

    public static function insert(array $data): bool
    {
        return self::getInstance()->model->insert($data) !== false;
    }

    public static function update(int $id, array $data): bool
    {
        return self::getInstance()->model->update($id, $data);
    }

    public static function delete(int $id): bool
    {
        return self::getInstance()->model->delete($id);
    }
}
