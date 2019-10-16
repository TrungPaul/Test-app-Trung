<?php

namespace App\Interfaces;

interface MemberServiceInterface
{
    public function showMember();
    public function addMember($request);
    public function editMember($input, $projectId);
    public function removeMember($projectId);
}
