<?php

namespace App\Repositories;

use App\Interfaces\MemberServiceInterface;
use App\Member;

class MemberRepository implements MemberServiceInterface
{

    public function showMember()
    {
        return Member::all();
    }

    public function addMember($input)
    {
        // TODO: Implement addMember() method.
    }

    public function editMember($input, $memberId)
    {
        // TODO: Implement editMember() method.
    }

    public function removeMember($memberId)
    {
        // TODO: Implement removeMember() method.
    }
}

