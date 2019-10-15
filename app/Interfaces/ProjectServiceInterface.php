<?php

namespace App\Interfaces;

interface ProjectServiceInterface
{
    public function showProject();
    public function addProject($input);
    public function editProject($input, $projectId);
    public function deleteProject($projectId);
}
