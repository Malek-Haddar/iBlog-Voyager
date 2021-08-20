<?php

namespace App\Policies;

use TCG\Voyager\Contracts\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use TCG\Voyager\Policies\BasePolicy;
use App\Article;

class ArticlePolicy extends BasePolicy
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
    // We can override all the BREAD (browse, read, edit, add and delete) actions here if we need to

    public function edit(User $user, $pc)
    {
        return $pc->owner_id === $user->id || $user->hasRole('admin');
    }

    public function delete(User $user, $pc)
    {
        return $pc->owner_id === $user->id || $user->hasRole('admin');
    }

    public function read(User $user, $pc)
    {
        return $pc->owner_id === $user->id || $user->hasRole('admin');
    }
}
