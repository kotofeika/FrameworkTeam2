<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Http\Response;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     * @param  User  $user
     * @param  Task  $task
     * @return bool
     */
    public function destroy(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Task' => 'App\Policies\TaskPolicy',
    ];

}
