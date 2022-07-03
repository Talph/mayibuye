<?php

namespace App\Http\Services;

class RoleService
{

    public function storeUserRole($user, $role): bool
    {
        if (!$role) {
            $user->relatedRoles()->attach(4); // sets role to 'user'
        }

        $user->relatedRoles()->attach($role);

        return true;
    }
}