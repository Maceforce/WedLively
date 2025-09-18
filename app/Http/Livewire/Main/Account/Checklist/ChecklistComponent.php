<?php

namespace App\Http\Livewire\Main\Account\Checklist;

use Livewire\Component;
use App\Models\Checklist;
use Illuminate\Support\Facades\Auth;

class ChecklistComponent extends Component
{
    public $tasks = [];
    public $newTask = '';
    protected $rules = [
        'tasks.*.completed' => 'boolean', 
        'newTask.title' => 'required|string|max:255',
        'newTask.description' => 'nullable|string',
        'newTask.category' => 'nullable|string',
        'newTask.due_date' => 'nullable|date',
    ];

    public function mount()
    {
        $this->tasks = Checklist::where('user_id', Auth::id())->get();
        $this->newTask = [
            'title' => '',
            'description' => '',
            'category' => '',
            'due_date' => ''
        ];
    }

    public function render()
    {
        return view('livewire.main.account.Checklist.checklist', [
            'tasks' => $this->tasks
        ])->extends('livewire.main.layout.app')->section('content');
    }

    public function addTask()
    {
        $this->validate();

        Checklist::create([
            'user_id'=>Auth::id(),
            'title' => $this->newTask['title'],
            'description' => $this->newTask['description'],
            'category' => $this->newTask['category'],
            'due_date' => $this->newTask['due_date'],
            'completed' => false 
        ]);
       
        $this->newTask = [
            'title' => '',
            'description' => '',
            'category' => '',
            'due_date' => ''
        ];
       
        $this->tasks = Checklist::where('user_id', Auth::id())->get();
        $this->emit('taskAdded');
    }

    public function toggleCompletion($taskId)
    {
        $task = Checklist::find($taskId);
        if ($task) {
            $task->completed = !$task->completed;
            $task->save();
        }
     
        $this->tasks = Checklist::where('user_id', Auth::id())->get();

    }

    public function deleteTask($taskId)
    {
        $task = Checklist::find($taskId);
        if ($task) {
            $task->delete(); 
            $this->tasks = Checklist::where('user_id', Auth::id())->get();
            $this->emit('taskDeleted'); 
        }
    }
}
