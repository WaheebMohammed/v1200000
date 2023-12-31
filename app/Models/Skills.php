<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skills extends Model
{
    use HasFactory, SoftDeletes;
    public function projects  (){
        return $this ->belongsToMany(Project::class);
    }
}
