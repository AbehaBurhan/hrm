<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'leave_type',
        'reason',
        'status',
        'quantity',
        'start_date',
        'end_date',
        'employee_id'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
