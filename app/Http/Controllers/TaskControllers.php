<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response|string
     */
    public function index()
    {
        $add_tasks = Task::firstOrCreate([
            'creator_id' => 1,
            'title' => 'Новости Германии',
            'content' => 'На площади в Берлине установиливают елку',
            'status_id' => 2

        ]);

        $tasks = Task::all();
        return view('tasks.tasks', [  //название страницы task.blade
            'tasks' => $tasks,
            // придумали переменную  'tasks' которая будет использоваться
            // в task.blade для вывода данных
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response|string
     */
    public function create()
    {
        return 'TaskControllers method create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response|string
     */
    public function store(Request $request)
    {
        return 'TaskControllers method store';
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response|string
     */
    public function show()
    {
        $users = DB::table('users')
            ->leftjoin('tasks', 'users.id', '=', 'tasks.creator_id')
            ->select('users.*', 'tasks.*')
            ->get();

        $user = User::all();

        return view('users_tasks.users_tasks', [
            'users' => $users,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response|string
     */
    public function edit($id)
    {
        return 'TaskControllers method edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response|string
     */
    public function update(Request $request, $id)
    {
        return 'TaskControllers method update';

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response|string
     */
    public function destroy($id)
    {
        return 'TaskControllers method destroy';
    }
}
