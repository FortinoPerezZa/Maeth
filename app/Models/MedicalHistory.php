<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'address',
        'phone_number',
        'job',
        'scholarship',
        'gender',
        'age',
        'status',
        'reason'
    ];
}
