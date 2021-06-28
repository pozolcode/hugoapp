<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'address1',
        'address2',
        'phone',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
    ];


    public function publicPractices()
    {
        return $this->belongsToMany(\App\Models\PublicPractice::class);
    }

    public function privatePractices()
    {
        return $this->belongsToMany(\App\Models\PrivatePractice::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\UserApp::class);
    }
}
