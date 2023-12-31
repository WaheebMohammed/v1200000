<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proposal extends Model
{
    use HasFactory, SoftDeletes;
    public function freelancer(){
        return $this->hasMany(User::class , 'employee_id')->withDefault();
    }
    public function project(){
        return $this->hasMany(Project::class, ' project_id' )->withDefault();
    }
    public function payment(){
        return $this->hasOne(Payment::class )->withDefault();
    }
}
