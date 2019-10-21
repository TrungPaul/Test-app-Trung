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
}
