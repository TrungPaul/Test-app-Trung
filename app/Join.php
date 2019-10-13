<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    protected $table = 'joins';
    protected $fillable = [
        'project_id',
        'member_id',
        'role',
        'is_active'
    ];
}
