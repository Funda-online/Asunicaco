<?php

namespace App\Controllers\DAO;

use App\Models\ProvinceModel;
use App\Controllers\BaseController;

class Province extends BaseController
{
    private static ?Province $instance = null;
    private ProvinceModel $model;

    private function __construct()
    {
        $this->model = new ProvinceModel();
    }

    public static function getInstance(): Province
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

    public static function getProvincesWithUniversityCount(): array
    {
        // Requête pour obtenir les provinces et le nombre d'universités
        $builder = self::getInstance()->model->builder();
        
        $builder->select('province.id_province, province.name, COUNT(university.id_university) AS university_count');
        $builder->join('university', 'university.id_province = province.id_province', 'left');
        $builder->groupBy('province.id_province');
        
        return $builder->get()->getResultArray();
    }
}
