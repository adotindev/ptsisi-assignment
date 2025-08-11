<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFoto extends Model
{
    protected $table = 'user_foto';
    protected $primaryKey = 'NO_FOTO';
    public $incrementing = false;
    public $timestamps = true; // Set to true if you want to use CREATE_DATE/UPDATE_DATE as timestamps

    protected $fillable = [
        'NO_FOTO',
        'ID_USER',
        'FOTO',
        'CREATE_BY',
        'CREATE_DATE',
        'DELETE_MARK',
        'UPDATE_BY',
        'UPDATE_DATE',
    ];

    protected $dates = [
        'CREATE_DATE',
        'UPDATE_DATE',
    ];
}