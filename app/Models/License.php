<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    protected $fillable = ['equipment_type', 'model', 'serial_number', 'license_type', 'expiration_date', 'datacenter_id'];

    public function datacenter()
    {
        return $this->belongsTo(Datacenter::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
