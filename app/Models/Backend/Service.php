<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// for soft delete
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{

    use HasFactory;
    use SoftDeletes;

    // for soft delete , experimental
    // use SoftDelete;

    protected $fillable = ['title', 'thumbnail', 'body', 'service_provider', 'visibility'];

    protected $dates = ['deleted_at'];
}