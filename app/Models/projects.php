<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;
    protected $fillable = ['name','description', 'deploy_link', 'level_id','added_by','is_highlight','views','is_active', 'created_at','updated_at'];
}
