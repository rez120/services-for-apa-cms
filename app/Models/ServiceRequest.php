<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Service;
class ServiceRequest extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $fillable = ['organization_name', 'phone_number', 'name', 'email'];

    protected $dates = ['deleted_at'];
    public function Service()
    {
        return $this->belongsTo(Service::class);
    }

}