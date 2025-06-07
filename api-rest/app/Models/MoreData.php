<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoreData extends Model
{
    /** @use HasFactory<\Database\Factories\MoreDataFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'function',
        'orgao_de_lotacao',
        'registration_siape',
        'teacher_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
