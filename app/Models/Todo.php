<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // Specify the table name if different from the default
    protected $table = 'todos';

    // Specify the primary key if different from the default
    protected $primaryKey = 'id';

    // Specify if the primary key is auto-incrementing
    public $incrementing = true;

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id'); // Adjust based on your column names
    }
}
