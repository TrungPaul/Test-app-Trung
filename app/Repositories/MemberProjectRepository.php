<?php
namespace App\Repositories;

use App\Interfaces\ProjectOfMemberServiceInterface;
use App\ProjectAndMember;
use App\Member;

class MemberProjectRepository implements ProjectOfMemberServiceInterface
{

    public function showProjectOfMember($projectId)
    {
        return  ProjectAndMember::where('project_id',$projectId)->get()->load('member');
    }
}
