<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'table_events';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'event_type',
        'date',
        'title',
        'event_description',
        'status',
        'speaker',
        'speaker_descrption',
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
    public function createEvent($data)
    {
        return $this->insert($data);
    }

    // Read (une seule ligne)
    public function getEvent($id)
    {
        return $this->find($id);
    }

    // Read (plusieurs lignes)
    public function getEvents()
    {
        return $this->findAll();
    }

    // Update
    public function updateEvent($id, $data)
    {
        return $this->update($id, $data);
    }
    // Delete
    public function deleteEvent($id)
    {
        return $this->delete($id);
    }
}
?>