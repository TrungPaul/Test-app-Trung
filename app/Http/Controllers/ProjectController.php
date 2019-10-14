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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'information' => 'required',
            'deadline' => 'required',
            'type' => 'required',
            'status' => 'required',
            'is_active' => 'required'
        ]);
        $this->projectservice->addProject($request);

        return response()->json(__('messages.successfully'), 200);
    }

}
