<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'valor',
        'cpf',
        'documento',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
