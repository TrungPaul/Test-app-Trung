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
}
