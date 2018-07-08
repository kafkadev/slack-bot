<?php

namespace App; 
use Laravel\Passport\HasApiTokens; 
use Illuminate\Notifications\Notifiable; 
use Illuminate\Foundation\Auth\User as Authenticatable; 

class User extends Authenticatable {
use HasApiTokens, Notifiable; 
//protected $dates = ['created_at', 'updated_at', 'expired_at'];
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
protected $fillable = [
        'name', 'email', 'password', 
]; 

/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
protected $hidden = [
        'password', 'remember_token', 
]; 
}