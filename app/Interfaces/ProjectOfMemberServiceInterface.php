<?php

namespace App\Interfaces;

interface ProjectOfMemberServiceInterface
{
    public function showProjectOfMember($projectId);
    public function addMemberIntoProject($input);
    public function getMemberOutProject($projectId);
}
