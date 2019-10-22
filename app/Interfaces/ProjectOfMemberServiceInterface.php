<?php

namespace App\Interfaces;

interface ProjectOfMemberServiceInterface
{
    public function showProjectOfMember($projectId);
    public function addMemberIntoProject($input);
}
