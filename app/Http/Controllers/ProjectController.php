<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
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
}
