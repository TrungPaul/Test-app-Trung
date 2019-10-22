<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = [
        'name',
        'information',
        'phone_number',
        'date_of_birth',
        'avatar',
        'position',
        'gender'
    ];

    public function projectAndMember()
    {
        return $this->hasMany('App\ProjectAndMember');
    }
}
