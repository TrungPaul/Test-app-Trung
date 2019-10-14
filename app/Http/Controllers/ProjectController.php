<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ProjectServiceInterface;
use App\Repositories\ProjectRepository;
use App\Project;
use App\Join;

class ProjectController extends Controller
{
    /**
     * @var ProjectServiceInterface
     */
    protected $projectservice;

    public function __construct(ProjectServiceInterface  $projectService)
    {
        $this->projectservice = $projectService;
    }

    public function addProject(Request $request)
    {
//        $project = $this->projectservice->addProject($request);
//
//        return $project;

        $project = new Project;
        $result = $project->addProject($request);

        return response()->json($result);
    }

    public function editProject(Request $request , $id)
    {
        $project = new Project;
        $result = $project->editProject($request,$id);

        return response()->json($result);
    }

    public function deleteProject($id)
    {
        $project = new Project;
        $join = new Join;
        $result = $project->deleteProject($id);
        $result1 = $join->projectBeDelete($id);
        return response()->json($result);
    }

}
