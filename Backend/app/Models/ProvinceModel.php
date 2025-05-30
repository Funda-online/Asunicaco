<?php

namespace App\Models;
use CodeIgniter\Model;

class ProvinceModel extends Model
{
    protected $table      = 'province';
    protected $primaryKey = 'id_province';

    protected $allowedFields = ['name', 'description', 'phone', 'address', 'committee', 'type', 'date_added', 'date_updated', 'date_deleted'];
    protected $useTimestamps = true;
    protected $createdField  = 'date_added';
    protected $updatedField  = 'date_updated';
    protected $deletedField  = 'date_deleted';
    protected $useSoftDeletes = true;
}

?>
