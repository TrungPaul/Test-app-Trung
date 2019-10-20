<?php
namespace App\Repositories;

use App\Interfaces\ProjectOfMemberServiceInterface;
use App\ProjectAndMember;
use App\Member;

class MemberProjectRepository implements ProjectOfMemberServiceInterface
{

    public function showProjectOfMember($projectId)
    {
        $listMemberOfProject = ProjectAndMember::select('member_id')->where('project_id', $projectId)->get()->pluck('member_id')->toArray();
        return $member = Member::whereIn('id', $listMemberOfProject)->get();
    }

    public function addMemberIntoProject($input)
    {
        // TODO: Implement addMemberIntoProject() method.
    }

    public function editMemberInProject($input, $projectId, $memberId)
    {
        // TODO: Implement editMemberInProject() method.
    }

    public function removeMemberInProject($projectId, $memberId)
    {
        // TODO: Implement removeMemberInProject() method.
    }
}
