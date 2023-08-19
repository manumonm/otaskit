<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'title','description'
    ];


    public function employees()
    {
        return $this->hasMany('App\Models\Employee','id','assignee');
    }

}
