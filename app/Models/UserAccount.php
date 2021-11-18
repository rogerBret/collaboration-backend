<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    use HasFactory;

    protected $fillable = [
		'user_id',
		'number',
		'balance'
	];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
