<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable

{
    protected $fillable = [
        'name', 'email', 'password', 'role' ,'profileimage'
    ];

    protected $attributes = [
        'profileimage' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJdj_g-QIwNa91IKr4jYQqzK-tRMwbOVNytJPoKRg1MS7xzyXXt6vRuPxtljcJp0LN6fU&usqp=CAU',

    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
    public function isAdmin()
    {
        return $this->is_admin;
    }
}
