<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessages extends Model
{

    protected $fillable = ['title', 'email' , 'name', 'body'];

    
    use HasFactory;
}