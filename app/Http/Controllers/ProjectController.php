<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Project;
use Illuminate\Http\Request;
use App\Interfaces\ProjectServiceInterface;
use App\Repositories\ProjectRepository;
use Validator;

class ProjectController extends BaseController
{
    /**
     * @var ProjectServiceInterface
     */
    protected $projectservice;

    public function __construct(ProjectServiceInterface  $projectService)
    {
        $this->projectservice = $projectService;
    }

    public function store(ProjectRequest $request)
    {
        $input = $request->all();
        $this->projectservice->addProject($input);

        return response()->json(__('message.successfully'), 200);
    }


    public function update(ProjectRequest $request, $projectId)
    {
        $input = $request->all();
        $this->projectservice->editProject($input, $projectId);

        return response()->json(__('message.successfully'), 200);
    }

    public function index()
    {
        $showProject = $this->projectservice->showProject();

        return response()->json($showProject);
    }
}
