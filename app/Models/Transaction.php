<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes; // <-- usar o trait

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
