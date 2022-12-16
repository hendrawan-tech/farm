<?php

namespace App\Policies;

use App\Models\User;
use App\Models\About;
use Illuminate\Auth\Access\HandlesAuthorization;

class AboutPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the about can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list abouts');
    }

    /**
     * Determine whether the about can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\About  $model
     * @return mixed
     */
    public function view(User $user, About $model)
    {
        return $user->hasPermissionTo('view abouts');
    }

    /**
     * Determine whether the about can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create abouts');
    }

    /**
     * Determine whether the about can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\About  $model
     * @return mixed
     */
    public function update(User $user, About $model)
    {
        return $user->hasPermissionTo('update abouts');
    }

    /**
     * Determine whether the about can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\About  $model
     * @return mixed
     */
    public function delete(User $user, About $model)
    {
        return $user->hasPermissionTo('delete abouts');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\About  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete abouts');
    }

    /**
     * Determine whether the about can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\About  $model
     * @return mixed
     */
    public function restore(User $user, About $model)
    {
        return false;
    }

    /**
     * Determine whether the about can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\About  $model
     * @return mixed
     */
    public function forceDelete(User $user, About $model)
    {
        return false;
    }
}
