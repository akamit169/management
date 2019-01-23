<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersAttendance extends Model
{
    //
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function AttendanceUsers()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }
}
