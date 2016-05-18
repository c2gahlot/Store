<?php

namespace App\Policies;

use App\User;

use App\Review;

use Illuminate\Auth\Access\HandlesAuthorization;

class ReviewPolicy
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

    public function destroy(User $user, Review $review)
    {
        return $user->id === $review->user_id;
    }
}
