<?php


namespace App\Repositories;

use App\Interfaces\ProjectServiceInterface;
use App\Project;

class ProjectRepository implements ProjectServiceInterface
{

    public function addProject($request)
    {
        return Project::create($request->all());
    }

    public function editProject($request)
    {

    }

    public function deleteProject($id)
    {

    }

    public function showProject()
    {

    }
}
