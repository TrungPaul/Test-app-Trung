<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = [
        'name',
        'information',
        'BoD',
        'avatar',
        'position',
        'gender'
    ];
}
