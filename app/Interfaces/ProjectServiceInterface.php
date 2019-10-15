<?php

namespace App\Interfaces;

interface ProjectServiceInterface
{
    public function showProject();
    public function addProject($input);
    public function editProject($input, $id);
    public function deleteProject($id);
}
