<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ProjectServiceInterface;
use App\Repositories\ProjectRepository;

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
        $this->projectservice->addProject($request);

        return response()->json('add successfully', 200);
    }

}
