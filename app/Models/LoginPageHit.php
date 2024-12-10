<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoginPageHit extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
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
