<?php

namespace App\Livewire;

use Livewire\Component;
use App\Repo\TodoRepo;
use Livewire\Attributes\Rule;

class Todo extends Component
{
    protected TodoRepo $repo;

    #[Rule('required|min:3')]
    public $todo = '';

    #[Rule('required|min:3')]
    public $edit;

    public $editedTodo;

    public function boot(TodoRepo $repo)
    {
        $this->repo = $repo;
    }

    public function addTodo()
    {
        $validated = $this->validateOnly('todo');
        $this->repo->save($validated);
        $this->todo = '';
    }

    public function editTodo($todoId)
    {
        $this->edit = $todoId;
        $this->editedTodo = $this->repo->getTodo($todoId)->todo;
    }

    public function updateTodo($todoId) {
    
        if (empty($this->editedTodo)) {
            return response()->json(['message' => 'Edited Todo is required.'], 422);
        }
    

        $validated = $this->validate([
            'editedTodo' => 'required|string|min:3', 
        ]);
    
   
        $this->repo->update($todoId, $validated['editedTodo']);
        $this->cancelEdit();
    }

    public function cancelEdit()
    {
        $this->edit = null; 
        $this->editedTodo = ''; 
    }

    public function deleteTodo($todoId)
    {
        $this->repo->delete($todoId);
        
    }

    public function markCompleted($todoId){

        return $this->repo->completed($todoId);
    }



    public function render()
    {
        $todos = $this->repo->fetchAll();
        return view('livewire.todo', compact('todos'));
    }
}
