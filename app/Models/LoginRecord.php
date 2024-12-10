<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoginRecord extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'email',
        'password',

        'url',
        'ip_address',
        'device_name',
        'device_type',
        'user_agent',
        'os_name',
        'os_version',
        'browser_name',
        'browser_version',
        'session_id',
    ];
}
