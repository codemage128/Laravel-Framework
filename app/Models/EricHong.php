<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class EricHong extends Model
{
    use SoftDeletes;

    public $table = 'EricHongs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|email',
        'address' => 'required'
    ];
}
