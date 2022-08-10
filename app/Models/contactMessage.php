<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class contactMessage extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title', 'email' , 'name', 'body'];
    protected $dates = ['deleted_at'];
}