<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;
    public function user (){
        return $this ->belongsTo(User::class)->withDefault();
    }
    public function category (){
        return $this ->belongsTo(Category::class)->withDefault();
    }
    public function proposals  (){
        return $this ->belongsTo(Proposal::class);
    }
    public function skills (){
        return $this ->belongsToMany(Skills::class);
    }
}
