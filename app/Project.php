<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Join;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'name',
        'information',
        'deadline',
        'type',
        'status',
        'is_active'
    ];

    public function addProject($request)
    {
        return Project::create($request->all());
    }

    public function editProject($request, $id)
    {

        return Project::find($id)->update($request->all());
    }

    public function deleteProject($id){
        return Project::find($id)->update(['is_active' => 0]);
    }
}
