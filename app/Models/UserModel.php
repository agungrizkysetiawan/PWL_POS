<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable implements JWTSubject
{
    // Method to get the identifier for JWT
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    // Method to get custom claims for JWT
    public function getJWTCustomClaims()
    {
        return [];
    }

    // Table associated with the model
    protected $table = 'm_user';

    // Primary key associated with the table
    protected $primaryKey = 'user_id';

    // Attributes that are mass assignable
    protected $fillable = ['level_id', 'username', 'nama', 'password'];
}
