<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskComponent extends Component
{
    public $tasks = [];
    public $title = "";
    public $description = "";
    public $iconOptions = [
        ["coffee", "☕"], 
        ["clock", "⏰"], 
        ["buble", "💭"], 
        ["lifting", "🏋️‍♀️"],
        ["books", "📚"]
    ];
    public $icon = "";
    public $status = "";
    
    public function getTask() {
        $this->tasks = Task::where("user_id", auth()->user()->id)->get();
    }

    public function triggerIcon ($newValue) {
        $this->icon = $newValue;
    }

    public function createTask () {
        $newTask = new Task();
        $newTask->title = $this->title;
        $newTask->description = $this->description;
        $newTask->icon = $this->icon;
        $newTask->status = $this->status;
        $newTask->user_id = auth()->user()->id;
        $newTask->save();
    }

    public function deleteTask ($taskId) {
        $toDeleteTask = Task::find($taskId);
        $toDeleteTask->delete();
    }

    public function render()
    {
        return view('livewire.task-component');
    }
}
