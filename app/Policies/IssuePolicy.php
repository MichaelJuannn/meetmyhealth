<?php

namespace App\Policies;

use App\Models\Client;
use App\Models\Issue;
use Illuminate\Auth\Access\HandlesAuthorization;

class IssuePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Client $client)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Client  $client
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Client $client, Issue $issue)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Client $client)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Client  $client
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Client $client, Issue $issue)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Client  $client
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Client $client, Issue $issue)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Client  $client
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Client $client, Issue $issue)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Client  $client
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Client $client, Issue $issue)
    {
        //
    }
}
