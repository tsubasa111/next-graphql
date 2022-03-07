<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'task_status_id',
        'user_id',
        'title',
        'text'
    ];

    protected $table = 'tasks';

    /**
     * usersとのリレーション
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function task_status()
    {
        return $this->belongsTo(TaskStatus::class);
    }
}
