<?php

namespace App\Controllers\DAO;

use App\Models\NewsModel;
use App\Controllers\BaseController;

class News extends BaseController
{
    private static ?News $instance = null;
    private NewsModel $newsModel;

    private function __construct()
    {
        $this->newsModel = new NewsModel();
    }

    public static function getInstance(): News
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function getAll(): array
    {
        return self::getInstance()->newsModel->findAll();
    }

    public static function getById(int $id): ?array
    {
        return self::getInstance()->newsModel->find($id);
    }

    public static function insert(array $data): bool
    {
        return self::getInstance()->newsModel->insert($data) !== false;
    }

    public static function update(int $id, array $data): bool
    {
        return self::getInstance()->newsModel->update($id, $data);
    }

    public static function delete(int $id): bool
    {
        return self::getInstance()->newsModel->delete($id);
    }
}
