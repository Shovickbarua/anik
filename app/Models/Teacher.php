<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = "teacher_information";
    protected $fillable = [
        'user_id',
        'image',
        'file',
        'address',
        'birthday',
        'profession', 'subject'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
