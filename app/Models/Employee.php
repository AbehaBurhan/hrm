<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'password',
        'job',
        'salary',
        'cnic',
        'status',
        'joining_date',
        'education',
        'department'
    ];

    public function leave()
    {
        return $this->hasOne(Leave::class);
    }
    public function leaveapplication()
    {
        return $this->hasMany(LeaveApplication::class);
    }
}
