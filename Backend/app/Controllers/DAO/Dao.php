<?php

namespace App\Controllers\DAO;

use CodeIgniter\Model;
use App\Controllers\BaseController;

abstract class DAO extends BaseController
{
    protected static $instance = null;
    protected Model $model;

    // Méthodes communes CRUD
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

    // Singleton pattern (à redéfinir dans la classe concrète)
    public static function getInstance(): static
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}
