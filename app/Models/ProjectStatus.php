<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'doctor_id',
        'project_id',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'doctor_id' => 'integer',
        'project_id' => 'integer',
    ];


    public function userApp()
    {
        return $this->belongsTo(\App\Models\UserApp::class);
    }

    public function doctor()
    {
        return $this->belongsTo(\App\Models\Doctor::class);
    }

    public function project()
    {
        return $this->belongsTo(\App\Models\Project::class);
    }
}
