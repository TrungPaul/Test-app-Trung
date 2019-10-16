<?php

namespace App\Interfaces;

interface MemberServiceInterface
{
    public function showMember();
    public function addMember($input);
    public function editMember($input, $memberId);
    public function removeMember($memberId);
}
