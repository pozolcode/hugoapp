<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
        'deadline',
        'project_leader_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'deadline' => 'date',
        'project_leader_id' => 'integer',
    ];


    public function userApps()
    {
        return $this->belongsToMany(\App\Models\UserApp::class);
    }

    public function questionnaires()
    {
        return $this->hasMany(\App\Models\Questionnaire::class);
    }

    public function projectLeader()
    {
        return $this->belongsTo(\App\Models\UserApp::class);
    }
}
