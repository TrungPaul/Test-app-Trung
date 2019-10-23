<?php

namespace App\Interfaces;

interface ProjectOfMemberServiceInterface
{
    public function showProjectOfMember($projectId);
    public function addMemberIntoProject($input);
    public function getMemberOutProject($projectId);
    public function updateMemberinProject($projectId,$memberId, $input);
    public function whenProjectBeDelete($projectId);
    public function whenMenberBeDelete($memberId);
    public function deleteMemberinProject($projectId,$memberId);
    public function getMemberInProject($projectId,$memberId);
}
