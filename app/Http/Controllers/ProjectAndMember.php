<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ProjectOfMemberServiceInterface;

class ProjectAndMember extends Controller
{
    public function __construct(ProjectOfMemberServiceInterface  $projectAndMemberService)
    {
        $this->projectAndMemberService = $projectAndMemberService;
    }

    public function index($projectId)
    {
        return response()->json($this->projectAndMemberService->showProjectOfMember($projectId));
    }
}
