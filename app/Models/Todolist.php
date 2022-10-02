<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Todoitem;


class Todolist extends Model

{
    use HasFactory;

    protected $fillable = ['title', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function Todoitem(){
        return $this->hasMany(Todoitem::class);
    }
}
