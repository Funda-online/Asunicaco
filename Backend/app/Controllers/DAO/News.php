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

    public static function getRecentsAll($current, $limit = 3): array
    {
        return self::getInstance()
            ->newsModel
            ->where('id_news !=', $current)
            ->orderBy('publish_date', 'DESC')
            ->findAll($limit );
    }

    // public static function getRecentsByProvince($province, $limit = 3): array
    // {
    //     $db = \Config\Database::connect();

    //     $sql = "
    //         SELECT * FROM (
    //             SELECT n.*, p.id ,
    //                 ROW_NUMBER() OVER (PARTITION BY p.id ORDER BY n.publish_date DESC) AS row_num
    //             FROM news n
    //             JOIN university u ON u.id = n.id_university
    //             JOIN province p ON p.id = u.id_province
    //             WHERE p.id == ?
    //         ) AS ranked
    //         WHERE row_num <= ?
    //     ";

    //     $query = $db->query($sql, [$province, $limit]);

    //     return $query->getResultArray();
    // }

    public static function getById(int $id): ?array
    {
        
        return self::getInstance()
        ->newsModel
        ->select('news.*, university.website as website, university.name as university')
                    ->join('university', 'university.id_university = news.university')
        ->find($id);
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

    public static function getAllWithUniversity(): array
    {
        return self::getInstance()->newsModel->select('news.*, university.website as website, university.name as university')
                    // ->join('university', 'university.id_university = news.university')
                    ->join('university', 'university.id_university = news.entity')
                    ->findAll();
    }
}
