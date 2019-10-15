<?php


namespace App\Repositories;

use App\Interfaces\ProjectServiceInterface;
use App\Project;

class ProjectRepository implements ProjectServiceInterface
{
   const IS_ACTIVE_ON = 1;
   const IS_ACTIVE_OFF = 0;
   // IS_ACTIVE = 1 -> PROJECT IS ACTIVE AND = 0 PROJECT IS OFF

    public function addProject($input)
    {
        return Project::create($input);
    }

    public function editProject($input, $projectId)
    {
        return Project::where('id',$projectId)->update($input);
    }

    public function removeProject($projectId)
    {

    }

    public function showProject()
    {
        return Project::where('is_active', self::IS_ACTIVE_ON)->get();
    }
}
