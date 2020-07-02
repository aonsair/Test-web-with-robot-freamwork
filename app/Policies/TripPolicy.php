<?php

namespace App\Policies;

use App\User;
use App\Trip;
use Illuminate\Auth\Access\HandlesAuthorization;

class TripPolicy
{
    use HandlesAuthorization;

//    public function create()
//    {
//        return ;
//    }

    public function view(User $user, Trip $trip)
    {
        return $user->id === $trip->user_id;
    }

    /**
     * Determine whether the user can update the trip.
     *
     * @param  \App\User  $user
     * @param  \App\Trip  $trip
     * @return mixed
     */
    public function update(User $user, Trip $trip)
    {
        return $user->id === $trip->user_id;
    }

    /**
     * Determine whether the user can delete the trip.
     *
     * @param  \App\User  $user
     * @param  \App\Trip  $trip
     * @return mixed
     */
    public function delete(User $user, Trip $trip)
    {
        return $user->id === $trip->user_id;
    }

    /**
     * Determine whether the user can restore the trip.
     *
     * @param  \App\User  $user
     * @param  \App\Trip  $trip
     * @return mixed
     */
    public function restore(User $user, Trip $trip)
    {
        //
    }


}
