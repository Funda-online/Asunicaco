<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id_user';

    protected $allowedFields = ['username', 'password', 'email', 'access', 'date_added', 'date_updated', 'date_deleted'];
    protected $useTimestamps = true;
    protected $createdField  = 'date_added';
    protected $updatedField  = 'date_updated';
    protected $deletedField  = 'date_deleted';
    protected $useSoftDeletes = true;
}

?>
