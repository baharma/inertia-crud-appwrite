<?php

namespace App\Services\AppwriteDatabase;

interface SkillService
{
    public function getAllSkills();
    public function getFindSkill(string $id);
    public function getUpdateSkill(string $id, array $data);
    public function getDeleteSkill(string $id);
    public function createSkill(array $data);
}
