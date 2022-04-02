<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded=[];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function information(): HasOne
    {
       return $this->hasOne(UserInformation::class,'user_id','id');
       /*сначала ключ из внещшней модели, потом - из внутрьней
       оставлю, чтобы лучше понимать структуру отношений 1 к 1-му*/
}

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class,'author_id');
}
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
