<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;
    
    public function dummyPolicyCheck(User $user): bool
    {
        request()->request->add(['foo' => 'bar']);
        
        return true;
    }
    
}
