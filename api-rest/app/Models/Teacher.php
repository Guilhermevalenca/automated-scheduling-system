<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'is_coordinator',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function moreDatas()
    {
        return $this->hasOne(MoreData::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function Address()
    {
        return $this->hasOne(Address::class);
    }
}
