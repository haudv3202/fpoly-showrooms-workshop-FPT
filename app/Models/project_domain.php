<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_domain extends Model
{
    use HasFactory;
    protected $fillable = ['projects_id', 'subjects_id'];
}
