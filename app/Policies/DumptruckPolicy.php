<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Dumptruck;
use Illuminate\Auth\Access\HandlesAuthorization;

class DumptruckPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_dumptruck');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Dumptruck $dumptruck): bool
    {
        return $user->can('view_dumptruck');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_dumptruck');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Dumptruck $dumptruck): bool
    {
        return $user->can('update_dumptruck');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Dumptruck $dumptruck): bool
    {
        return $user->can('delete_dumptruck');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_dumptruck');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Dumptruck $dumptruck): bool
    {
        return $user->can('force_delete_dumptruck');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_dumptruck');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Dumptruck $dumptruck): bool
    {
        return $user->can('restore_dumptruck');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_dumptruck');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Dumptruck $dumptruck): bool
    {
        return $user->can('replicate_dumptruck');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_dumptruck');
    }
}
