<?php

namespace App\Interfaces;

interface ProjectOfMemberServiceInterface
{
    public function showProjectOfMember($projectId);
    public function addMemberIntoProject($input);
    public function editMemberInProject($input, $projectId,$memberId);
    public function removeMemberInProject($projectId,$memberId);
}
