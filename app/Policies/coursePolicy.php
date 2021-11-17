<?php

namespace App\Policies;

use App\Models\User;
use App\Models\course;
use Illuminate\Auth\Access\HandlesAuthorization;

class coursePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function enrolled(user $user, course $course){
        return $course->students->contains($user->id);
    }

    public function published(?user $user, course $course){
        if ($course->status == 3) {
            return true;
        }else{
            return false;
        }
    }
}
