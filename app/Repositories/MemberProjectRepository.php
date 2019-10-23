<?php
namespace App\Repositories;

use App\Interfaces\ProjectOfMemberServiceInterface;
use App\ProjectAndMember;
use App\Member;

class MemberProjectRepository implements ProjectOfMemberServiceInterface
{
    const DATA_NULL = 0;
    public function showProjectOfMember($projectId)
    {
        return  ProjectAndMember::where('project_id',$projectId)->get()->load('member');
    }

    public function addMemberIntoProject($input)
    {
        $checkExistenceOfData = ProjectAndMember::where('project_id', $input['project_id'])->where('member_id', $input['member_id'])->count();

        if($checkExistenceOfData > self::DATA_NULL)
        {
            return response()->json(__('message.fail'), 404);
        }
        ProjectAndMember::create($input);

        return response()->json(__('message.successfully'), 200);
    }

    public function getMemberOutProject($projectId)
    {
        $memberOutProject =  ProjectAndMember::select('member_id')->where('project_id', $projectId)->get()->pluck('member_id')->toArray();

        return Member::whereNotIn('id', $memberOutProject)->get();
    }


    public function updateMemberinProject($projectId, $memberId, $input)
    {
        return ProjectAndMember::where('project_id', $projectId)->where('member_id', $memberId)->update($input);
    }

    public function whenProjectBeDelete($projectId)
    {
        $project =  ProjectAndMember::select('project_id')->where('project_id', $projectId)->get()->pluck('project_id')->toArray();

        return ProjectAndMember::whereIn('project_id', $project )->update(['is_active' => self::DATA_NULL]);
    }

    public function whenMenberBeDelete($memberId)
    {
        $member =  ProjectAndMember::select('member_id')->where('member_id', $memberId)->get()->pluck('member_id')->toArray();

        return ProjectAndMember::whereIn('member_id', $member )->delete();
    }

    public function deleteMemberinProject($projectId, $memberId)
    {
        return ProjectAndMember::where('project_id', $projectId)->where('member_id', $memberId)->delete();
    }

    public function getMemberInProject($projectId, $memberId)
    {
        return ProjectAndMember::where('project_id', $projectId)->get();
    }
}
