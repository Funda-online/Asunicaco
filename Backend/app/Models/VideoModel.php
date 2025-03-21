<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table = 'table_videos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'link',
        'title',
        'vidéo_description',
        'source',
        'type',
        'user_id',
        'creationdate',
        'updatedate',
        'deletedate',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'creationdate';
    protected $updatedField = 'updatedate';
    protected $deletedField = 'deletedate';

    protected $skipValidation = false;

    // Create
    public function createVideo($data)
    {
        return $this->insert($data);
    }

    // Read (une seule ligne)
    public function getVideo($id)
    {
        return $this->find($id);
    }

    // Read (plusieurs lignes)
    public function getVideos($limit = null, $offset = 0)
    {
        return $this->findAll($limit, $offset);
    }

    // Update
    public function updateVideo($id, $data)
    {
        return $this->update($id, $data);
    }

    // Delete
    public function deleteVideo($id)
    {
        return $this->delete($id);
    }
}
?>