<?php

namespace App\Services\AppwriteDatabase;

use Appwrite\Client;
use Appwrite\Services\Databases;

class SkillServiceImplement implements SkillService
{
    protected Databases $db;
    protected string $databaseId;
    protected string $collectionId;

    public function __construct(Client $client)
    {
        $this->db = new Databases($client);
        $this->databaseId = env('APPWRITE_PROJECT_DATABASE');
        $this->collectionId = '6728b011002e9f81323e';
    }

    public function getAllSkills()
    {
        return $this->db->listDocuments($this->databaseId, $this->collectionId);
    }

    public function getFindSkill(string $id)
    {
        return $this->db->getDocument($this->databaseId, $this->collectionId, $id);
    }

    public function getUpdateSkill(string $id, array $data)
    {
        return $this->db->updateDocument($this->databaseId, $this->collectionId, $id, $data);
    }

    public function getDeleteSkill(string $id)
    {
        return $this->db->deleteDocument($this->databaseId, $this->collectionId, $id);
    }

    public function createSkill(array $data)
    {
        $permissions = [
            'read' => ['*'], // Everyone can read
            'write' => ['role:member'] // Only members can write
        ];
        return $this->db->createDocument($this->databaseId, $this->collectionId, $data, $permissions);
    }
}
