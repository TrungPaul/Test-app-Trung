<?php

namespace App\Interfaces;

interface ProjectServiceInterface
{
    public function showProject();
    public function addProject($request);
    public function editProject($request);
    public function deleteProject($id);
}
