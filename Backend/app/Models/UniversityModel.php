<?php

namespace App\Models;
use CodeIgniter\Model;

class UniversityModel extends Model
{
    protected $table      = 'university';
    protected $primaryKey = 'id_university';

    protected $allowedFields = ['id_province', 'name', 'description', 'address', 'email', 'phone', 'website', 'logo', 'faculties', 'date_added', 'date_updated', 'date_deleted'];
    protected $useTimestamps = true;
    protected $createdField  = 'date_added';
    protected $updatedField  = 'date_updated';
    protected $deletedField  = 'date_deleted';
    protected $useSoftDeletes = true;
}

?>