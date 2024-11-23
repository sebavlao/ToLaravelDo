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
        "coffee" => "☕", 
        "clock" => "⏰", 
        "bubble" => "💭", 
        "lifting" => "🏋️‍♀️",
        "books" => "📚"
    ];
    public $statusOptions = ["In_Progress", "Completed", "Wont_do"];
    public $icon = "";
    public $status = "";
    
    public function mount() {
        $this->tasks = Task::where("user_id", auth()->user()->id)->get();
    }

    public function colorTaskHandle ($status) {
        return match(true) {
            $status === "In_Progress" => "progress",
            $status === "Completed" => "completed",
            $status === "Wont_do" => "wont-do",
            default => "skin-default"
        };
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
