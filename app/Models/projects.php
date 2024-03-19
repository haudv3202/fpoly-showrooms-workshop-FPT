<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class projects extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name','description', 'deploy_link', 'level_id','added_by','views','is_active', 'created_at','updated_at'];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }


    public function level(){
        return $this->hasOne(level::class, 'id', 'level_id');
    }

    public function technical(){
        return $this->hasMany(technical_projects::class, 'id', 'projects_id');
    }

    public function domain(){
        return $this->hasOne(level::class, 'id', 'level_id');
    }
}
