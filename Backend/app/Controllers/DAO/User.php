<?php

namespace App\Controllers\DAO;

use App\Models\UserModel;
use App\Controllers\BaseController;

class User extends BaseController
{
    private static ?User $instance = null;
    private UserModel $model;

    private function __construct()
    {
        $this->model = new UserModel();
    }

    public static function getInstance(): User
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

    public static function loginUser(string $username, string $password): ?array
    {
        $user = self::getInstance()->model
            ->where('username', $username)
            ->first();

        if (!$user) {
            return null; // utilisateur introuvable
        }
        // Connexion réussie, stocker les infos de session
        session()->set([
            'id_user'  => $user['id_user'],
            'username' => $user['username'],
            'email'    => $user['email'],
            'access'   => $user['access'],
            'logged_in' => true
        ]);
        return $user;
    }
}
