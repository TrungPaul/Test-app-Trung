<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ProjectOfMemberServiceInterface;
use App\Http\Requests\ProjectAndMemberRequest;

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

    public function store(ProjectAndMemberRequest $request)
    {
        $input = $request->all();

        return response()->json($this->projectAndMemberService->addMemberIntoProject($input));
    }
    public function getMemberOutProject($projectId)
    {
        return response()->json($this->projectAndMemberService->getMemberOutProject($projectId));
    }

    public function update(ProjectAndMemberRequest $request, $projectId, $memberId)
    {
        $input = $request->all();
        $this->projectAndMemberService->updateMemberinProject($projectId, $memberId, $input);

        return response()->json(__('message.successfully'), 200);
    }

    public function destroy($projectId, $memberId)
    {
        $this->projectAndMemberService->deleteMemberinProject($projectId, $memberId);

        return response()->json(__('message.successfully'), 200);
    }

    public function getInforMemberInProject($projectId, $memberId)
    {
        return response()->json($this->projectAndMemberService->getMemberInProject($projectId, $memberId));
    }
}
