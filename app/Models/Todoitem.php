<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Todolist;

class Todoitem extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'todolist_id'];

    public function todolist(){
        return $this->belongsTo(Todolist::class);
    }
}
