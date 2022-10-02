<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use App\Models\Todolist;

class User extends Model implements Authenticatable
{
    use BasicAuthenticatable;

    protected $fillable = ['email', 'password'];

    public function todolists(){
        return $this->hasMany(Todolist::class);
    }
}
