<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectAndMember extends Model
{
    protected $table = 'project_member';
    protected $fillable = [
        'project_id',
        'member_id',
        'role',
        'is_active'
    ];

    public function member()
    {
        return $this->belongsTo('App\Member', 'member_id', 'id');
    }
}

