<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(Request $request)
    {

        $filter = $request->d ?? date('Y-m-d');

        $carbon = Carbon::createFromDate($filter);
        $data['string_date'] = $carbon->format('d \d\e M');

        $data['prev'] = $carbon->addDay(-1)->format('Y-m-d');
        $data['next'] = $carbon->addDay(2)->format('Y-m-d');

        $tasks = Task::whereDate('due_date', $filter)->get();
        return view('home', ['tasks' => $tasks, 'data' => $data]);
    }

    public function create(Request $request)
    {
        $categories = Category::all();
        return view('task.create', ['categories' => $categories]);
    }

    public function createAction(Request $request)
    {
        $task = $request->only(['title', 'due_date', 'created_at', 'category_id', 'description']);
        $task['user_id'] = 1;
        Task::create($task);
        return redirect(route('task.home'));
    }

    public function edit(Request $request)
    {
        $task = Task::find($request->id);

        if (!$task)
        {
            return redirect(route('task.home'));
        }

        $categories = Category::all();

        return view('task.edit', ['task' => $task, 'categories' => $categories]);
    }

    public function editAction(Request $request)
    {
        $taskData = $request->only(['title', 'due_date', 'description', 'category_id', 'created_at']);
        $task = Task::find($request->id);

        if (!$task)
        {
            return redirect(route('task.home'));
        }

        $task->update($taskData);
        $task->save();
        return redirect(route('task.home'));
    }

    public function destroy(Request $request)
    {
        $task = Task::find($request->id);

        if ($task)
        {
            $task->delete();
        }

        return redirect(route('task.home'));
    }

    public function markTask(Request $request)
    {
        $task = Task::find($request->id);

        if (!$task)
        {
            return redirect(route('task.home'));
        }

        $task->update(['status' => !$task->status]);
        $task->save();
        return redirect(route('task.home'));
    }
}
