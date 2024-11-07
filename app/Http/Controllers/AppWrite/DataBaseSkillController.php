<?php

namespace App\Http\Controllers\AppWrite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AppwriteDatabase\SkillService;

class DataBaseSkillController extends Controller
{
    protected $serviceDatabaseSkill;

    public function __construct(SkillService $serviceDatabaseSkill){

    }
}
