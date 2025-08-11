<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $table = 'user_activity';
    protected $primaryKey = 'NO_ACTIVITY';
    public $incrementing = false;
    public $timestamps = false; // Set to true if you want to use CREATE_DATE as timestamp

    protected $fillable = [
        'NO_ACTIVITY',
        'ID_USER',
        'DESCRIPTION',
        'STATUS',
        'MENU_ID',
        'DELETE_MARK',
        'CREATE_BY',
        'CREATE_DATE',
    ];

    protected $dates = [
        'CREATE_DATE',
    ];
}