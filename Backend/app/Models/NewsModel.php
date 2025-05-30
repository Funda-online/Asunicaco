<?php

namespace App\Models;
use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table      = 'news';
    protected $primaryKey = 'id_news';

    protected $allowedFields = ['title', 'summary', 'content', 'publish_date', 'expiration_date', 'id_user', 'entity', 'theme', 'date_added', 'date_updated', 'date_deleted'];
    protected $useTimestamps = true;
    protected $createdField  = 'date_added';
    protected $updatedField  = 'date_updated';
    protected $deletedField  = 'date_deleted';
    protected $useSoftDeletes = true;
}
?>
