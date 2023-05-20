<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {

        if( $user->hasPermissionTo('view post')){
            return true;
        }else{
            return false;
        }

        //normal grant of resource using Role
        // return $user->hasRole(['admin', 'writer', 'moderator']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Post $post): bool
    {
        if( $user->hasPermissionTo('view post')){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {

        if($user->hasPermissionTo('create post')){
            return true;
        }else{
            return false;
        }

        //
        // return $user->hasRole(['admin', 'writer', 'moderator']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Post $post): bool
    {

        if( $user->hasPermissionTo('edit post')){
            return true;
        }else{
            return false;
        }
        // return $user->hasRole(['admin', 'moderator', 'writer']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Post $post): bool
    {

        if( $user->hasPermissionTo('delete post')){
            return true;
        }else{
            return false;
        }
        // return $user->hasRole(['admin', 'moderator']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Post $post): void
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Post $post): void
    {
        //
    }
}
