<?php

namespace App\Models;
use CodeIgniter\Model;

class FeaturedNewsModel extends Model
{
    protected $table      = 'featurednews';
    protected $primaryKey = 'id_featured';

    protected $allowedFields = ['id_news', 'date_added', 'expiration_date', 'date_updated', 'date_deleted'];
    protected $useTimestamps = true;
    protected $createdField  = 'date_added';
    protected $updatedField  = 'date_updated';
    protected $deletedField  = 'date_deleted';
    protected $useSoftDeletes = true;
}

?>