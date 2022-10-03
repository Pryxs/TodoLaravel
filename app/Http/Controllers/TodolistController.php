<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Todolist;
use \App\Models\Todoitem;

class TodolistController extends Controller
{
    public function getTodolistPage(){
        $todolist_id = request("id");
        $todolist = Todolist::where('id', $todolist_id)->firstOrFail();

        $todoitems = Todoitem::where('todolist_id', $todolist_id)->get();

        return view('/todolist', [
            'todolist' => $todolist,
            'todoitems' => $todoitems
        ]);
    }

    public function storeTodoItem(){
        request()->validate([
            'title' => ['required'],
            'todolist_id' => ['required'],
        ]);
    
        $todoitem = Todoitem::create([
            'title' => request('title'),
            'description' => request('description'),
            'todolist_id' => request('todolist_id'),
        ]);

        return back();
    }

    public function updateTodoItem(){
        request()->validate([
            // 'done' => ['accepted'],
            'todoitem_id' => ['required'],
        ]);
        $test = null;

        if(request("done")){
            $todoitem = Todoitem::where('id', request('todoitem_id'))->update([
                'done' => 1,
            ]);        
        } else {
            $todoitem = Todoitem::where('id', request('todoitem_id'))->update([
                'done' => 0,
            ]);   
        }

        return back();
    }
}
